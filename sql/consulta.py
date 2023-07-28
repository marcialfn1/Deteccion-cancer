from database.db import db
import os
import uuid

def insertar_paciente(nombre, fecha_nacimiento, telefono, direccion, ciudad, estado, image):
    # Crear un cursor para interactuar con la base de datos
    cursor = db.cursor()

    # Insertar los datos en la tabla correspondiente
    sql = "INSERT INTO pacientes (nombre, fecha_nacimiento, telefono, direccion, ciudad, estados, image) VALUES (%s, %s, %s, %s, %s, %s, %s)"
    values = (nombre, fecha_nacimiento, telefono,
              direccion, ciudad, estado, image)
    cursor.execute(sql, values)

    # Guardar los cambios en la base de datos
    db.commit()

    # Cerrar el cursor y la conexión a la base de datos
    cursor.close()
