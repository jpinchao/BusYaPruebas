@extends('templates.main-Admin')
@section('title', 'Panel Paradas')
@section('content')
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;"> --}}
        <h1 class="text-center">Edicion de Paradas</h1>
        <br>
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('paradas.update',$parada) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$parada->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="ubicacion" class="form-label">Ubicacion</label>
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{$parada->posicion}}" placeholder="Latitud, Longitud">
                    </div>
                    <div class="mb-3">
                        <label for="posicion" class="form-label">Posicion</label>
                        <input type="text" class="form-control" id="posicion" name="posicion">
                    </div>
                    <div class="mb-3">
                        <label for="id_ruta" class="form-label">Tipo</label>
                        <select class="form-control" name="id_ruta" id="id_ruta">
                            @foreach ($rutas as $ruta)
                                @if ($ruta->id == $id_ruta)
                                    <option value="{{ $ruta->id }}" selected>{{ $ruta->nombre }}</option>
                                @else
                                    <option value="{{ $ruta->id }}">{{ $ruta->nombre }}</option>
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
