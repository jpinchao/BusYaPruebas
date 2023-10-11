@extends('templates.main-Admin')
@section('title', 'Panel Vehiculos')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buses</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('vehiculos.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="placa" class="form-label">Placa</label>
                        <input type="string" class="form-control" id="placa" name="placa">
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="string" class="form-control" id="modelo" name="modelo">
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="string" class="form-control" id="marca" name="marca">
                    </div>
                    <div class="mb-3">
                        <label for="capacidad" class="form-label">Capacidad</label>
                        <input type="integer" class="form-control" id="capacidad" name="capacidad">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-control" name="id_tipo_vehiculo" id="tipo_vehiculo">
                            @foreach ($tipos_vehiculo as $tipo_vehiculo)
                                <option value="{{ $tipo_vehiculo->id }}">{{ $tipo_vehiculo->nombre }}</option>
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
                    <th scope="col">Placa</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehiculos as $vehiculo)
                    <tr>
                        <td>{{ $vehiculo->placa }}</td>
                        <td>{{ $vehiculo->modelo }}</td>
                        <td>{{ $vehiculo->marca }}</td>
                        <td>{{ $vehiculo->capacidad }}</td>
                        <td>
                            <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="post" class="d-inline">
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
