@extends('templates.main-Admin')
@section('title', 'Panel Viajes')
@section('content')
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">         --}}
        <h1 class="text-center">Edicion de Viajes</h1>
        <br>
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post"
                    action="{{ route('viajes.update', $viaje) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="id_ruta" class="form-label">Ruta</label>
                        <select class="form-select" id="id_ruta" name="id_ruta">
                            @foreach ($rutas as $ruta)
                                @if ($ruta->id == $id_ruta)
                                    <option value="{{ $ruta->id }}" selected>{{ $ruta->nombre }}</option>
                                @else
                                    <option value="{{ $ruta->id }}">{{ $ruta->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_conductor" class="form-label">conductor</label>
                        <select class="form-select" id="id_conductor" name="id_conductor">
                            @foreach ($conductores as $conductor)
                                @if ($conductor->id == $id_conductor)
                                    <option value="{{ $conductor->id }}" selected>{{ $conductor->nombre }}</option>
                                @else
                                    <option value="{{ $conductor->id }}">{{ $conductor->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_vehiculo" class="form-label">Vehiculo</label>
                        <select class="form-select" id="id_vehiculo" name="id_vehiculo">
                            @foreach ($vehiculos as $vehiculo)
                                @if ($vehiculo->id == $id_vehiculo)
                                    <option value="{{ $vehiculo->id }}" selected>{{ $vehiculo->placa }}</option>
                                @else
                                    <option value="{{ $vehiculo->id }}">{{ $vehiculo->placa }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_salida" class="form-label">Fecha salida</label>
                        <input type="datetime-local" class="form-control" id="fecha_salida" name="fecha_salida"
                            value="{{ $viaje->fecha_salida }}">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_llegada" class="form-label">Fecha llegada</label>
                        <input type="datetime-local" class="form-control" id="fecha_llegada" name="fecha_llegada"
                            value="{{ $viaje->fecha_llegada }}">
                    </div>

                    <div class="mb-3">
                        <label for="costo" class="form-label">Costo</label>
                        <input type="float" class="form-control" id="costo" name="costo"
                            value="{{ $viaje->costo }}">
                    </div>

                    <div class="mb-3">
                        <label for="cupos_disponibles" class="form-label">Cupos disponibles</label>
                        <input type="float" class="form-control" id="cupos_disponibles" name="cupos_disponibles"
                            value="{{ $viaje->cupos_disponibles }}" disabled>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    {{-- </div> --}}
@endsection
