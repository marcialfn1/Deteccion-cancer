from keras.models import load_model
import cv2
import numpy as np
from PIL import Image

# Cargar el modelo previamente entrenado
modelo = load_model('modelo_entrenado.h5')

# Función para predecir la clase de una imagen
def predecir_clase(img):
    # Redimensiones de la imagen a 224x224 píxeles si es necesario
    if img.shape[0] != 224 or img.shape[1] != 224:
        img = Image.fromarray(img)
        img = img.resize((224, 224))
        img = np.array(img)

    # Ejecuta la imagen a través del modelo
    prediction = modelo.predict(np.array([img]))

    # Devuelve el resultado de la predicción
    if round(prediction[0][0]) == 1:
        return 'La lesión es cancerosa'
    else:
        return 'La lesión es benigna'
