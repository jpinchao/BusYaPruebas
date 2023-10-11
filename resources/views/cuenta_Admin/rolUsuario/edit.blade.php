@extends('templates.main-Admin')
@section('title', 'Panel Roles Usuario')
@section('content')
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">         --}}
        <h1 class="text-center">Edicion de Roles de Usuario</h1>
        <br>
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('rolUsuario.update',$rol_usuario) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$rol_usuario->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$rol_usuario->descripcion}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    {{-- </div> --}}
@endsection
