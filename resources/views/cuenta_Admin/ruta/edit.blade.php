@extends('templates.main-Admin')
@section('title', 'Panel Rutas')
@section('content')
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">         --}}
        <h1 class="text-center">Edicion de Rutas</h1>
        <br>
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('rutasyhorarios.update', $ruta) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $ruta->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label for="origen" class="form-label">Origen</label>
                        <input type="text" class="form-control" id="origen" name="origen"
                            value="{{ $ruta->origen }}">
                    </div>
                    <div class="mb-3">
                        <label for="destino" class="form-label">Destino</label>
                        <input type="text" class="form-control" id="destino" name="destino"
                            value="{{ $ruta->destino }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    {{-- </div> --}}
@endsection
