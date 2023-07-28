from keras.models import Sequential
from keras.layers import Dense, Conv2D, MaxPooling2D, Flatten
import tensorflow as tf

import cv2
import numpy as np

def create_model():
    modelo = Sequential()
    modelo.add(Conv2D(32, (3, 3), input_shape=(
        224, 224, 3), activation='relu'))
    modelo.add(MaxPooling2D(pool_size=((2, 2))))
    modelo.add(Flatten())
    modelo.add(Dense(128, activation='relu'))
    modelo.add(Dense(50, activation='relu'))
    modelo.add(Dense(1, activation='sigmoid'))
    modelo.compile(optimizer='adam', loss='binary_crossentropy',
                   metrics=['accuracy'])
    return modelo


def load_data():
    x_train = []
    y_train = []
    x_test = []
    y_test = []
    dataTr = []

    import glob
    import os
    for filename in glob.glob(os.path.join('data/train/malignant', '*.jpg')):
        dataTr.append([1, cv2.imread(filename)])
    for filename in glob.glob(os.path.join('data/train/benign', '*.jpg')):
        dataTr.append([0, cv2.imread(filename)])

    from random import shuffle
    shuffle(dataTr)

    for i, j in dataTr:
        y_train.append(i)
        x_train.append(j)
    x_train = tf.convert_to_tensor(x_train)
    y_train = tf.convert_to_tensor(y_train)

    for filename in glob.glob(os.path.join('data/test/malignant', '*.jpg')):

        img = cv2.imread(filename)
        img = cv2.resize(img, (224, 224))  # resize image to fixed size
        x_test.append(img)
        y_test.append(1)
    for filename in glob.glob(os.path.join('data/test/benign', '*.jpg')):

        img = cv2.imread(filename)
        img = cv2.resize(img, (224, 224))  # resize image to fixed size
        x_test.append(img)
        y_test.append(0)

    x_test = tf.convert_to_tensor(x_test)
    y_test = tf.convert_to_tensor(y_test)

    return x_train, y_train, x_test, y_test

x_train, y_train, x_test, y_test = load_data()

x_train = tf.convert_to_tensor(x_train)
y_train = tf.convert_to_tensor(y_train)
x_test = tf.convert_to_tensor(x_test)
y_test = tf.convert_to_tensor(y_test)

modelo = create_model()

modelo.fit(x_train, y_train, batch_size=32, epochs=30,
           validation_data=(x_test, y_test))

# Guardar modelo entrenado en archivo
modelo.save('modelo_entrenado.h5')