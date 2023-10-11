@extends('templates.main-Admin')
@section('title', 'Panel Rutas')
@section('content')
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">         --}}
        <h1 class="text-center">Edicion de Rutas</h1>
        <br>
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('rutas.update', $ruta) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $ruta->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-control" name="id_tipo_ruta" id="tipo_ruta">
                            @foreach ($tipos_ruta as $tipo_ruta)
                                @if ($tipo_ruta->id == $tipo)
                                    <option value="{{ $tipo_ruta->id }}" selected>{{ $tipo_ruta->nombre }}</option>
                                @else
                                    <option value="{{ $tipo_ruta->id }}">{{ $tipo_ruta->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    {{-- </div> --}}
@endsection
