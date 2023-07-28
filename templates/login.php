<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | IA</title>

    <!-- Link para el icon del proyecto -->
    <link rel="icon" href="{{ url_for('static', filename='images/icons/AI.png') }}">

    <!-- CSS para el navbar -->
    <link rel="stylesheet" href="{{ url_for('static', filename='css/login.css') }}">

    <!-- CDN para framework de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h5 style="text-align: right;">IA ver. 1.0</h5>
    </div>
</div>
<div class="login-box">
    <h2>Inicio de sesión</h2>

    <form action="/authenticate" method="POST">
        <div class="user-box">
            <input type="text" name="email" required="">
            <label>Correo electrónico</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Contraseña</label>
        </div>
        {% if error %}
        <p>{{ error }}</p>
        {% endif %}
        <div class="row">
            <div class="col-md-4"></div>
            <label class="col-md-4">
                <button type="submit">
                    Acceder
                </button>
            </label>
            <label for="" class="col-md-4"></label>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <label>¿No tienes una cuenta?</label><a href="/register.php" style="text-decoration: none;"> Crear cuenta</a>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </form>
</div>

</html>