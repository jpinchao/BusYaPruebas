@extends('templates.main-Admin')
@section('title', 'Panel Tipos de Empleado')
@section('content')
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">         --}}
        <h1 class="text-center">Edicion de Tipos de empleado</h1>
        <br>
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('tipoEmpleado.update',$tipo_empleado) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$tipo_empleado->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Cedula</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$tipo_empleado->descripcion}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    {{-- </div> --}}
@endsection
