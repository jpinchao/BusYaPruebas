@extends('templates.main')
@section('title', 'Rutas Disponibles')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mb-4 text-white">Bienvenido Usuario</h1>
                <p class="text-center text-white">Aquí encontrarás todas las rutas disponibles hasta el momento:</p>

                <table class="table table-bordered mt-4 text-white">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Origen</th>
                            <th scope="col">Destino</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rutas as $ruta)
                            <tr>
                                <td>{{ $ruta->nombre }}</td>
                                <td>{{ $ruta->origen }}</td>
                                <td>{{ $ruta->destino }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
