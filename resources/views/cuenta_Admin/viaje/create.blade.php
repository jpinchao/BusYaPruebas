@extends('templates.main-Admin')
@section('title', 'Panel Viajes')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Viajes</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('viajes.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="id_ruta" class="form-label">Ruta</label>
                        <select class="form-select" id="id_ruta" name="id_ruta">
                            @foreach ($rutas as $ruta)
                                <option value="{{ $ruta->id }}">{{ $ruta->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_conductor" class="form-label">conductor</label>
                        <select class="form-select" id="id_conductor" name="id_conductor">
                            @foreach ($conductores as $conductor)
                                <option value="{{ $conductor->id }}">{{ $conductor->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_vehiculo" class="form-label">Vehiculo</label>
                        <select class="form-select" id="id_vehiculo" name="id_vehiculo">
                            @foreach ($vehiculos as $vehiculo)
                                <option value="{{ $vehiculo->id }}">{{ $vehiculo->placa }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_salida" class="form-label">Fecha salida</label>
                        <input type="datetime-local" class="form-control" id="fecha_salida" name="fecha_salida">
                    </div>
                    <div class="mb-3">
                        <label for="fecha_llegada" class="form-label">Fecha llegada</label>
                        <input type="datetime-local" class="form-control" id="fecha_llegada" name="fecha_llegada">
                    </div>
                    <div class="mb-3">
                        <label for="costo" class="form-label">Costo</label>
                        <input type="float" class="form-control" id="costo" name="costo">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Ruta</th>
                    <th scope="col">conductor</th>
                    <th scope="col">Vehiculo</th>
                    <th scope="col">Fecha salida</th>
                    <th scope="col">Fecha llegada</th>
                    <th scope="col">Cupos Disponibles</th>
                    <th scope="col">Costo</th>
                    <th scope="row">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viajes as $viaje)
                    @php
                        $ruta = collect($rutas)
                            ->where('id', $viaje->id_ruta)
                            ->first()->nombre;
                        $conductor = collect($conductores)
                            ->where('id', $viaje->id_conductor)
                            ->first()->nombre;
                        $vehiculo = collect($vehiculos)
                            ->where('id', $viaje->id_vehiculo)
                            ->first()->placa;
                    @endphp
                    <tr>
                        <td>{{ $ruta }}</td>
                        <td>{{ $conductor }}</td>
                        <td>{{ $vehiculo }}</td>
                        <td>{{ $viaje->fecha_salida }}</td>
                        <td>{{ $viaje->fecha_llegada }}</td>
                        <td>{{ $viaje->costo }}</td>
                        <td>{{ $viaje->cupos_disponibles }}</td>
                        <td>
                            <a href="{{ route('viajes.edit', $viaje) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('viajes.destroy', $viaje) }}" method="post" class="d-inline">
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
