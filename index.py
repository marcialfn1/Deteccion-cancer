from flask import Flask, render_template, request, redirect, url_for, session
import cv2
import numpy as np
from predict import predecir_clase
import os

from sql.consulta import insertar_paciente
from auth import authenticate

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('login.php')

@app.route('/index.php')
def inicio():
    return render_template('index.php')

@app.route('/logout')
def logout():
    # Eliminar los datos de la sesion
    session.clear()
    # Redireccionar a la pagina de inicio
    return render_template('login.php')

app.secret_key = 'IA_redesNeuronales'

@app.route('/register.php')
def register():
    return render_template('register.php')

@app.route('/predict', methods=['POST'])
def resultado_image():
    # Obtener los datos del formulario
    nombre = request.form['nombre']
    fecha_nacimiento = request.form['fecha-nacimiento']
    telefono = request.form['telefono']
    direccion = request.form['direccion']
    ciudad = request.form['ciudad']
    # Obtener el valor del SELECT
    estado = request.form['estados']
    image = request.files['image']

    # Verificar que los campos no estén vacíos
    if not nombre or not fecha_nacimiento or not telefono or not direccion or not ciudad or not estado or not image:
        return "Por favor complete todos los campos del formulario y seleccione un estado válido."
    
    # Obtiene la imagen enviada desde el formulario
    img = request.files['image'].read()
    npimg = np.frombuffer(img, np.uint8)
    img = cv2.imdecode(npimg, cv2.IMREAD_COLOR)

    # Realiza la predicción
    result = predecir_clase(img)

    # Crear la carpeta 'lesiones' en la raíz del proyecto
    dir_name = 'lesiones'
    if not os.path.exists(dir_name):
        os.makedirs(dir_name)

    # Crear las subcarpetas dentro de la carpeta principal
    if not os.path.exists(os.path.join(dir_name, 'lesiones_cancerosas')):
        os.makedirs(os.path.join(dir_name, 'lesiones_cancerosas'))
    if not os.path.exists(os.path.join(dir_name, 'lesiones_benignas')):
        os.makedirs(os.path.join(dir_name, 'lesiones_benignas'))

    # Guardar la imagen en la carpeta correspondiente
    if result == 'La lesión es cancerosa':
        filename = f'{nombre}_lesion_cancerosa.jpg'
        cv2.imwrite(os.path.join(dir_name, 'lesiones_cancerosas', filename), img)
    else:
        filename = f'{nombre}_lesion_benigna.jpg'
        cv2.imwrite(os.path.join(dir_name, 'lesiones_benignas', filename), img)

    insertar_paciente(nombre, fecha_nacimiento, telefono, direccion, ciudad, estado, image)
    # Crear un diccionario con los datos del formulario
    datos = {'nombre': nombre, 'fecha_nacimiento': fecha_nacimiento, 'telefono': telefono, 'direccion': direccion, 'ciudad': ciudad, 'estado': estado, 'image': image}

    # Muestra el resultado en la página web
    return render_template('result.php', datos=datos, result=result)

@app.route('/authenticate', methods=['POST'])
def authenticate_route():
    return authenticate()

if __name__ == '__main__':
    app.run(debug=True)
