from flask import Flask, render_template, request, redirect, url_for, session
import pymysql

app = Flask(__name__)

app.secret_key = 'IA_redesNeuronales'

@app.route('/authenticate', methods=['POST'])
def authenticate():
    email = request.form['email']
    password = request.form['password']

    conn = pymysql.connect(
        host='localhost',
        user='root',
        password='',
        database='ia',
        cursorclass=pymysql.cursors.DictCursor
    )

    if conn.open:
        email = conn.escape_string(email)
        password = conn.escape_string(password)
        
        query = "SELECT * FROM users WHERE email='{}' AND password='{}'".format(email, password)
        cursor = conn.cursor()
        cursor.execute(query)
        if cursor.rowcount == 1:
            row = cursor.fetchone()
            session['user_id'] = row['id_user']
            msj = "Usuario autentificado con éxito"
            
            return render_template('index.php', mensaje=msj)
        else:
            error_message = "¡Credenciales incorrectas, intente nuevamente!"
            return render_template('login.php', error=error_message)

        cursor.close()
        conn.close()
    else:
        return "Error de conexión a la base de datos"

@app.route('/')
def index():
    return render_template('index.php')

@app.route('/login')
def login():
    return render_template('login.php')

if __name__ == '__main__':
    app.run()
