<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles_validation.css')}}">
</head>

<body style="background-color: #eee;">

    <section class="vh-100">
        <div class="container h-100" >
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card custom-card text-white" >
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Ingresa tus datos</p>

                                    <form class="mx-1 mx-md-4" method="post" action="{{route('validar-registro')}}">
                                        @csrf

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">

                                                <label class="form-label" for="nombre">Nombre</label>
                                                <input type="text" id="nombre" name="nombre"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">

                                                <label class="form-label" for="cedula">Cédula</label>
                                                <input type="number" id="cedula" name="cedula"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">

                                                <label class="form-label" for="telefono">Número de telefono</label>
                                                <input type="number" id="telefono" name="telefono"
                                                    class="form-control" />
                                            </div>
                                        </div>


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">

                                                <label class="form-label" for="username">Nombre de usuario</label>
                                                <input type="text" id="username" name="username"
                                                    class="form-control" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">

                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" id="email" name="email"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label for="validationCustom04" class="form-label">Departamento</label>
                                                <select class="form-select" id="Departamento" required>
                                                    <option value="">Escoge...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label for="validationCustom05" class="form-label">Municipio</label>
                                                <select class="form-select" id="Municipio" required>
                                                    <option value="">Escoge...</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">

                                                <label class="form-label" for="contrasena">Contraseña</label>
                                                <input type="password" id="password" name="password"
                                                    class="form-control" />
                                                <div hidden class="valid-checks">
                                                    <ul class="checklist">
                                                        <li>Letra en minuscula</li>
                                                        <li>Letra en mayuscula</li>
                                                        <li>Numero</li>
                                                        <li>Por lo menos 8 caracteres</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="conf-password">Confirmar
                                                    contraseña</label>
                                                <input type="password" id="conf-password" name="password" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">Acepto los <a onclick="abrirVentanaEmergente(imagenUrl)" class="highlight-link">términos y condiciones</a></label>
                                        </div>
                                        

                                        <div class="d-flex flex-row justify-content-center mb-4">
                                            <p>Ya tienes una cuenta? <a href="{{ route('ingreso') }}">Inicia
                                                    Sesión</a></p>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="{{ asset('imagenes/img/logo2.png') }}"
                                        class="img-fluid" alt="Imagen de Logo">

                                </div>
                                <div class="text-end">
                                    <a href="/" class="btn btn-dark btn-sm mt-3">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src='{{asset('js/functions/Script_Validation.js')}}'></script>
    <script src='{{asset('js/functions/Script.js')}}'></script>
    <script src='{{asset('js/functions/ScriptAPI.js')}}'></script>
    <script>
        var imagenUrl = "{{ asset('imagenes/img/2560px-Minjusticia_Colombia.svg.png') }}";
    </script>
</body>

</html>
