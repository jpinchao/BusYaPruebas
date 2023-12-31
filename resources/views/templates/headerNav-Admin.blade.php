<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">BUSYA</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="{{route('logout')}}">Cerrar Sesión</a>
        </div>
    </div>
</header>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('CuentaAdmin')}}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('empleados.index')}}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Empleados
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('vehiculos.index')}}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Buses
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tipoEmpleado.index')}}">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Tipo Empleados
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tipoVehiculo.index')}}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Tipos Vehiculos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('rutasyhorarios.index')}}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Rutas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('viajes.index')}}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Viajes
                </a>
            </li>
        </ul>
    </div>
</nav>
