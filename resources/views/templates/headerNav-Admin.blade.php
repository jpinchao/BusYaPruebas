<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">AUTOLEGAL</a>
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
                <a class="nav-link" href="{{route('clientes.index')}}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('empleados.index')}}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Empleados
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('usuarios.index')}}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Usuarios
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('vehiculos.index')}}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Buses
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('paradas.index')}}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Paradas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('rolUsuario.index')}}">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Rol Usuario
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('rutasyhorarios.index')}}">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Rutas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tipoEmpleado.index')}}">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Tipo Empleados
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tipoRuta.index')}}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Tipos Rutas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tipoVehiculo.index')}}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Tipos Vehiculos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('viajes.index')}}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Viajes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('pqrs.index')}}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    PQRS
                </a>
            </li>
        </ul>

        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
            <span>Generar Reporte</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{route('descargarVehiculos-pdf')}}">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Buses
                </a>
            </li>
        </ul>
    </div>
</nav>
