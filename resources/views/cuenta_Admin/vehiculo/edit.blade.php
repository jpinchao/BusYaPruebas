@extends('templates.main-Admin')
@section('title', 'Panel Vehiculos')
@section('content')
    <h1 class="text-center">Edicion de Buses</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('vehiculos.update', $vehiculo) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="placa" class="form-label">Placa</label>
                        <input type="text" class="form-control" id="placa" name="placa"
                            value="{{ $vehiculo->placa }}">
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo"
                            value="{{ $vehiculo->modelo }}">
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca"
                            value="{{ $vehiculo->marca }}">
                    </div>
                    <div class="mb-3">
                        <label for="capacidad" class="form-label">Capacidad</label>
                        <input type="number" class="form-control" id="capacidad" name="capacidad"
                            value="{{ $vehiculo->capacidad }}">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-control" name="id_tipo_vehiculo" id="tipo_vehiculo">
                            @foreach ($tipos_vehiculo as $tipo_vehiculo)
                                @if ($tipo_vehiculo->id_tipo_vehiculo = $tipo)
                                    <option value="{{ $tipo_vehiculo->id }}" selected>{{ $tipo_vehiculo->nombre }}</option>
                                @else
                                    <option value="{{ $tipo_vehiculo->id }}">{{ $tipo_vehiculo->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
