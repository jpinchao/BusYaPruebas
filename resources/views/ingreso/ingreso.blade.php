<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iniciar Sesion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="{{asset('css/styles_validation.css')}}">
</head>

<body>

    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card custom-card text-white" >
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
								<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-1">

                                    <img src="{{ asset('imagenes/img/busya.png') }}"
                                        class="img-fluid" alt="Sample image">

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-5 order-1 order-lg-2">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Inicio de Sesión</p>

                                    <form class="mx-1 mx-md-4" method="post" action="{{route('iniciar-sesion')}}">
                                        @csrf

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">

                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">

                                                <label class="form-label" for="contrasena">Contraseña</label>
                                                <input type="password" name="password" id="contrasena" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="mantener-sesion" name="mantener-sesion" />
                                            <label class="form-check-label" for="mantener-sesion">Mantener sesión
                                                iniciada
                                            </label>
                                        </div>

                                        <div class="d-flex flex-row justify-content-center mb-4">
                                            <p>No tienes una cuenta? <a href="{{ route('registro') }}">Registrarse</a>
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Iniciar
                                                Sesion</button>
                                        </div>
                                       

                                    </form>
                                     
                                    
                                </div>
                                
                                
                            </div>
                            <div class="text-start">
                                <a href="/" class="btn btn-dark btn-sm mt-3">Regresar</a>
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
</body>

</html>
