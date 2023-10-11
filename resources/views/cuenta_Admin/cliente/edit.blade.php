@extends('templates.main-Admin')
@section('title', 'Panel Clientes')
@section('content')
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;"> --}}
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('clientes.update',$cliente) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cliente->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cedula</label>
                        <input type="number" class="form-control" id="cedula" name="cedula" value="{{$cliente->cedula}}">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" value="{{$cliente->telefono}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    {{-- </div> --}}
@endsection
