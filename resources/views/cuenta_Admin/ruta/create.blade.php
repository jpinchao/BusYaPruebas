@extends('templates.main-Admin')
@section('title', 'Panel Rutas')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Rutas</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('rutasyhorarios.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Origen</label>
                        <input type="text" class="form-control" id="origen" name="origen">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Destino</label>
                        <input type="text" class="form-control" id="destino" name="destino">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rutas as $ruta)
                    <tr>
                        <td>{{ $ruta->nombre }}</td>
                        <td>{{ $ruta->origen }}</td>
                        <td>{{ $ruta->destino }}</td>
                        <td>
                            <a href="{{ route('rutasyhorarios.edit', $ruta) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('rutasyhorarios.destroy', $ruta) }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
