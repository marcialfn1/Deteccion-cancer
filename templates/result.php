<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detección de cáncer | IA</title>

    <!-- CSS para los datos del paciente -->
    <link rel="stylesheet" href="{{ url_for('static', filename='css/style_profile.css') }}">

    <!-- CSS para los datos del paciente -->
    <link rel="stylesheet" href="{{ url_for('static', filename='css/profile.css') }}">

    <!-- CSS para el navbar -->
    <link rel="stylesheet" href="{{ url_for('static', filename='css/navbar.css') }}">

    <!-- Link para el icon del proyecto -->
    <link rel="icon" href="{{ url_for('static', filename='images/icons/AI.png') }}">

    <!-- CDN para framework de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../static/images/icons/AI.png">
            <a href="#">Detector IA</a>
        </div>
        <div class="menu-wrapper">
            <ul class="menu">
                <li><a href="/index.php">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="/logout">Cerrar sesión</a></li>
            </ul>
        </div>
        <div class="toggle">
            <i class="fa fa-bars"></i>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
                <div class="row">
                    <label class="col-md-2"></label>
                    <div class="col-md-8">
                        <h2>Datos del paciente</h2>
                    </div>
                </div>
                <div class="profile mt-4 mb-5">
                    <p class="imgUser text-center">
                        <img src="../static/images/icons/man.jpg">                        
                    </p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Resultado del paciente {{ datos.nombre}}</h5>
                                <h4 style="font-size: 30px;">{{ result }}</h4>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 style="font-size: 19px; font-weight: bold;">Nombre del paciente</h5>
                                <p style="font-size: 14px; font-weight: bold; color: rgb(22, 22, 165);">{{ datos.nombre
                                    }}</p>
                            </div>
                            <div class="col-md-6">
                                <h5 style="font-size: 19px; font-weight: bold;">Fecha de nacimiento</h5>
                                <p style="font-size: 14px; font-weight: bold; color: rgb(22, 22, 165);">{{
                                    datos.fecha_nacimiento }}</p>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 style="font-size: 19px; font-weight: bold;">Teléfono</h5>
                                <p style="font-size: 14px; font-weight: bold; color: rgb(22, 22, 165);">{{
                                    datos.telefono }}</p>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <h5 style="font-size: 19px; font-weight: bold;">Dirección</h5>
                                <p style="font-size: 14px; font-weight: bold; color: rgb(22, 22, 165);">{{
                                    datos.direccion }}</p>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 style="font-size: 19px; font-weight: bold;">Ciudad</h5>
                                <p style="font-size: 14px; font-weight: bold; color: rgb(22, 22, 165);">{{ datos.ciudad
                                    }}</p>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <h5 style="font-size: 19px; font-weight: bold;">Estado</h5>
                                <p style="font-size: 14px; font-weight: bold; color: rgb(22, 22, 165);">{{ datos.estado
                                    }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>
</body>

</html>