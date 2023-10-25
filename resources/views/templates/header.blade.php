<header>
    <nav class="navbar navbar-expand-lg bg-success fixed-top">
        <div class="container-fluid">
            <a href="{{route('index')}}"><img src="{{asset('imagenes/img/Logo.png')}}" style="width: 150px; height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('conocernos')}}">Nosotros</a>
                        </li>
                    </ul>
                    <div>
                        <a class="btn btn-dark" href="{{route('registro')}}">Registrarse</a>
                        <a class="btn btn-warning" href="{{route('ingreso')}}">Iniciar Sesion</a>
                    </div>
                </div>
        </div>
    </nav>
</header>
