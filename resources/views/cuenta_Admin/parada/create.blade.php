@extends('templates.main-Admin')
@section('title', 'Panel Paradas')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Paradas</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('paradas.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="ubicacion" class="form-label">Ubicacion</label>
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion"
                            placeholder="Latitud, Longitud">
                    </div>
                    <div class="mb-3">
                        <label for="posicion" class="form-label">Posicion</label>
                        <input type="text" class="form-control" id="posicion" name="posicion">
                    </div>
                    <div class="mb-3">
                        <label for="id_ruta" class="form-label">Tipo</label>
                        <select class="form-control" name="id_ruta" id="id_ruta">
                            @foreach ($rutas as $ruta)
                                <option value="{{ $ruta->id }}">{{ $ruta->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Posicion</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paradas as $parada)
                    @php
                        $tipo = collect($rutas)
                            ->where('id', $parada->id_ruta)
                            ->first()->nombre;
                    @endphp
                    <tr>
                        <td>{{ $parada->nombre }}</td>
                        <td>{{ $parada->ubicacion }}</td>
                        <td>{{ $parada->posicion }}</td>
                        <td>{{ $tipo }}</td>
                        <td>
                            <a href="{{ route('paradas.edit', $parada) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('paradas.destroy', $parada) }}" method="post" class="d-inline">
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
