<!DOCTYPE html>
<html>

<head>
    <title>@yield('title','Empresa de transporte')</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>


<body>
    @include('templates.header')

    <main class="container">
        @yield('content')
    </main>

    <img class="btn-whatsapp"
        src="https://static.vecteezy.com/system/resources/previews/018/819/287/non_2x/whatsapp-icon-transparent-free-png.png"
        width="50" height="50" alt="Whatsapp"
        onclick="window.location.href='https://wa.me/573001112233?text=Hola!%20Estoy%20interesado%20en%20tu%20servicio'">

    <footer>
        <p>Todos los derechos reservados © Empresa de Transporte</p>
    </footer>

    <script src='{{ asset('js/functions/Script.js') }}'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
