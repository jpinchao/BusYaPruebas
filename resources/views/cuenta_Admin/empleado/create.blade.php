@extends('templates.main-Admin')
@section('title', 'Panel Empleados')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Empleados</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('empleados.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cedula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-control" name="id_tipo_empleado" id="tipo_empleado">
                            @foreach ($tipos_empleado as $tipo_empleado)
                                <option value="{{ $tipo_empleado->id }}">{{ $tipo_empleado->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    @php
                        $tipo = collect($tipos_empleado)
                            ->where('id', $empleado->id_tipo_empleado)
                            ->first()->nombre;
                    @endphp
                    <tr>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->cedula }}</td>
                        <td>{{ $empleado->telefono }}</td>
                        <td>{{ $tipo }}</td>
                        <td>
                            <a href="{{ route('empleados.edit', $empleado) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('empleados.destroy', $empleado) }}" method="post" class="d-inline">
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
