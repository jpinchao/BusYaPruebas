@extends('templates.main-Admin')
@section('title', 'Panel Usuarios')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuarios</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('usuarios.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="id_empleado" class="form-label">Empleado</label>
                        <select class="form-control" name="id_empleado" id="id_empleado">
                            @foreach ($empleados as $empleado)
                                <option value="{{ $empleado->id }}">{{ $empleado->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre de usuario</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-control" name="estado" id="estado">
                                <option value="1" selected>Activo
                                </option>
                                <option value="0">Inactivo
                                </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_rol_usuario" class="form-label">Rol</label>
                        <select class="form-control" name="id_rol_usuario" id="id_rol_usuario">
                            @foreach ($roles_usuario as $rol_usuario)
                                <option value="{{ $rol_usuario->id }}">{{ $rol_usuario->nombre }}
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
                    <th scope="col">Empleado</th>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    @php

                        $empleado = collect($empleados)
                            ->where('id', $usuario->id_empleado)
                            ->first()->nombre;

                        $rol = collect($roles_usuario)
                            ->where('id', $usuario->id_rol_usuario)
                            ->first()->nombre;

                    @endphp
                    <tr>
                        <td>{{ $empleado }}</td>
                        <td>{{ $usuario->username }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->estado }}</td>
                        <td>{{ $rol }}</td>
                        <td>
                            <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('usuarios.destroy', $usuario) }}" method="post" class="d-inline">
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
