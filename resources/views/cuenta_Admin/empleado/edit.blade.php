@extends('templates.main-Admin')
@section('title', 'Panel Empleados')
@section('content')
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;"> --}}
        <h1 class="text-center">Edicion de Empleados</h1>
        <br>
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('empleados.update',$empleado) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$empleado->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cedula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" value="{{$empleado->cedula}}">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{$empleado->telefono}}">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-control" name="id_tipo_empleado" id="tipo_empleado">
                            @foreach ($tipos_empleado as $tipo_empleado)
                                @if ($tipo_empleado->id == $tipo)
                                    <option value="{{ $tipo_empleado->id }}" selected>{{ $tipo_empleado->nombre }}</option>
                                @else
                                    <option value="{{ $tipo_empleado->id }}">{{ $tipo_empleado->nombre }}</option>
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
