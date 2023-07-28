<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detección de cáncer | IA</title>

    <!-- CSS para el navbar -->
    <link rel="stylesheet" href="{{ url_for('static', filename='css/navbar.css') }}">

    <!-- CSS para el formulario -->
    <link rel="stylesheet" href="{{ url_for('static', filename='css/profile.css') }}">

    <!-- Link para el icon del proyecto -->
    <link rel="icon" href="{{ url_for('static', filename='images/icons/AI.png') }}">

    <!-- CDN para framework de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Iconos de fontAwesome incluidos en el proyecto -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Link para los modales de bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../static/images/icons/AI.png">
            <a href="#">Detector IA</a>
        </div>
        <div class="menu-wrapper">
            <ul class="menu">
                <li><a href="#">Inicio</a></li>
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
            <div class="col-md-2" style="align-self: end;">
                <div class="text-left desarrolladores-container">
                    <p style="border-radius: 20px; color: black; font-weight: bold;">
                        <li class="fa fa-code"></li><span style="text-decoration: none; cursor: pointer; font-size: 17px;" data-toggle="modal" data-target="#exampleModal"> Desarrolladores</span>
                    </p>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="border-radius: 20px;">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="../static/images/icons/Desarrolladores.jpg" style="width: 210px; height: 210px;">
                                </div>
                                <div class="col-md-7" style="margin-top: 10px;">
                                    <p class="text-center">
                                        <li class="fa fa-code"></li> Desarrolladores
                                    </p>
                                    <hr style="color: black;">
                                    <ul>
                                        <li><strong>Marcial Francisco Nicolas</strong></li>
                                        <li><strong>Gabriel Velázquez Maldonado</strong></li>
                                    </ul>
                                    <p>Proyecto en Python utilizando el framework FLASK para desarrollo web.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <label class="col-md-2"></label>
                    <div class="col-md-8">
                        <h2>Datos del paciente</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <form class="form-signin mt-4 mb-5" action="/predict" method="post" enctype="multipart/form-data">
                            <div class="imgUser2 text-center">
                                <img src="../static/images/icons/man.jpg">
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <h6 style="margin-bottom: 5px; text-align: center;">Nombre completo del paciente
                                    </h6>
                                    <div class="input-group-login sombreado-input">
                                        <div class="input-group-prepend-login">
                                            <span class="input-group-text fondo-icon">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="border-0-login form-control-login input-border-none" placeholder="Nombre completo" id="nombre" name="nombre" />
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 style="margin-bottom: 5px; text-align: center; margin-top: 15px;">Fecha de
                                        nacimiento</h6>
                                    <div class="input-group-login sombreado-input">
                                        <div class="input-group-prepend-login">
                                            <span class="input-group-text fondo-icon">
                                                <i class="fas fa-calendar"></i>
                                            </span>
                                        </div>
                                        <input type="date" class="border-0-login form-control-login input-border-none" id="fecha-nacimiento" name="fecha-nacimiento" />
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 style="margin-bottom: 5px; text-align: center; margin-top: 15px;">Numero de
                                        teléfono</h6>
                                    <div class="input-group-login sombreado-input">
                                        <div class="input-group-prepend-login">
                                            <span class="input-group-text fondo-icon">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="border-0-login form-control-login input-border-none" placeholder="Teléfono" id="telefono" name="telefono" />
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 style="margin-bottom: 5px; text-align: center; margin-top: 15px;">Dirección</h6>
                                    <div class="input-group-login sombreado-input">
                                        <div class="input-group-prepend-login">
                                            <span class="input-group-text fondo-icon">
                                                <i class="fas fa-map"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="border-0-login form-control-login input-border-none" placeholder="Calle/Colonia" id="direccion" name="direccion" />
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 style="margin-bottom: 5px; text-align: center; margin-top: 15px;">Ciudad de
                                        origen</h6>
                                    <div class="input-group-login sombreado-input">
                                        <div class="input-group-prepend-login">
                                            <span class="input-group-text fondo-icon">
                                                <i class="fas fa-globe-americas"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="border-0-login form-control-login input-border-none" placeholder="Ciudad" id="ciudad" name="ciudad" />
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 style="margin-bottom: 5px; text-align: center; margin-top: 15px;">Estado de la
                                        república</h6>
                                    <div class="input-group-login sombreado-input">
                                        <div class="input-group-prepend-login">
                                            <span class="input-group-text fondo-icon">
                                                <i class="fas fa-globe"></i>
                                            </span>
                                        </div>
                                        <select class="border-0-login form-control-login input-border-none custom-select" name="estados" style="height: 60px; background-color: #f0e5fd; border-top-right-radius: 30px; border-bottom-right-radius: 30px;">
                                            <option value="" disabled selected>Seleccione el estado</option>
                                            <option value="Aguascalientes">Aguascalientes</option>
                                            <option value="Baja California">Baja California</option>
                                            <option value="Baja California Sur">Baja California Sur</option>
                                            <option value="Campeche">Campeche</option>
                                            <option value="Coahuila">Coahuila</option>
                                            <option value="Colima">Colima</option>
                                            <option value="Chiapas">Chiapas</option>
                                            <option value="Chihuahua">Chihuahua</option>
                                            <option value="Durango">Durango</option>
                                            <option value="Guanajuato">Guanajuato</option>
                                            <option value="Guerrero">Guerrero</option>
                                            <option value="Hidalgo">Hidalgo</option>
                                            <option value="Jalisco">Jalisco</option>
                                            <option value="México">México</option>
                                            <option value="Michoacán">Michoacán</option>
                                            <option value="Morelos">Morelos</option>
                                            <option value="Nayarit">Nayarit</option>
                                            <option value="Nuevo León">Nuevo León</option>
                                            <option value="Oaxaca">Oaxaca</option>
                                            <option value="Puebla">Puebla</option>
                                            <option value="Querétaro">Querétaro</option>
                                            <option value="Quintana Roo">Quintana Roo</option>
                                            <option value="San Luis Potosí">San Luis Potosí</option>
                                            <option value="Sinaloa">Sinaloa</option>
                                            <option value="Sonora">Sonora</option>
                                            <option value="Tabasco">Tabasco</option>
                                            <option value="Tamaulipas">Tamaulipas</option>
                                            <option value="Tlaxcala">Tlaxcala</option>
                                            <option value="Veracruz">Veracruz</option>
                                            <option value="Yucatán">Yucatán</option>
                                            <option value="Zacatecas">Zacatecas</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <h6 style="margin-bottom: 5px; text-align: center; margin-top: -5px;">Seleccione la
                                        imagen de la lesión</h6>
                                    <div class="container-input text-center">
                                        <input type="file" name="image" id="file" class="inputfile inputfile-5" data-multiple-caption="{count} archivos seleccionados" multiple />
                                        <label for="file">
                                            <figure>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17">
                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                                    </path>
                                                </svg>
                                            </figure>
                                            <span class="iborrainputfile">Seleccionar archivo</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center">
                                <button type="submit" class="button-signup fondo-color-signup">
                                    <strong>ENVIAR</strong>
                                </button>
                            </p>
                        </form>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 text-center">
                                    {% if mensaje %}
                                    <p style="font-size: 11px;">{{ mensaje }}</p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script>
        'use strict';;
        (function(document, window, index) {
            var inputs = document.querySelectorAll('.inputfile');
            Array.prototype.forEach.call(inputs, function(input) {
                var label = input.nextElementSibling,
                    labelVal = label.innerHTML;

                input.addEventListener('change', function(e) {
                    var fileName = '';
                    if (this.files && this.files.length > 1)
                        fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                    else
                        fileName = e.target.value.split('\\').pop();

                    if (fileName)
                        label.querySelector('span').innerHTML = fileName;
                    else
                        label.innerHTML = labelVal;
                });
            });
        }(document, window, 0));
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>