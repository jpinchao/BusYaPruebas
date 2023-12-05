<header class="encabezado">
    <nav class="navbar navbar-expand-lg bg-success fixed-top">
        <div class="container-fluid">
            <a href="{{route('index')}}"><img src="{{asset('imagenes/img/Logo2.png')}}" style="width: 50px; height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @auth
                            @if(auth()->user()->hasRole('Cliente'))
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('CuentaCliente') }}" style="font-size: 20px; margin-left:30px">
                                        <em>Inicio</em>
                                    </a>
                                </li>
                            @endif
                        @endauth
                        @auth
                            @if(auth()->user()->hasRole('Cliente'))
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('retrasos') }}" style="font-size: 20px; margin-left:30px">
                                        <em>Retrasos</em>
                                    </a>
                                </li>
                            @endif
                        @endauth
                        @auth
                            @if(auth()->user()->hasRole('Cliente'))
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('pqr') }}" style="font-size: 20px; margin-left:30px">
                                        <em>PQR´s</em>
                                    </a>
                                </li>
                            @endif
                        @endauth
                        @auth
                            @if(auth()->user()->hasRole('Empleado'))
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('conductor.index') }}" style="font-size: 20px; margin-left:30px">
                                        <em>Notificar Retrasos</em>
                                    </a>
                                </li>
                            @endif
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('conocernos')}}" style= "font-size: 20px; margin-left:30px"><em>Acerca de nosotros...</em></a>
                        </li>
                    </ul>
                    
                    <div>
                        @guest
                            {{-- Mostrar estos botones solo si el usuario no ha iniciado sesión --}}
                            <a class="btn btn-dark" href="{{ route('registro') }}">Registrarse</a>
                            <a class="btn btn-warning" href="{{ route('ingreso') }}">Iniciar sesión</a>
                        @else
                            <form action="{{ route('logout') }}" method="GET">
                                @csrf <!-- Agrega el token CSRF para protección contra CSRF -->
                                <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
                            </form>
                        @endguest
                    </div>

                </div>

        </div>
    </nav>
</header>
