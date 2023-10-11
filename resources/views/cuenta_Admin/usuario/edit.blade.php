@extends('templates.main-Admin')
@section('title', 'Panel Usuarios')
@section('content')
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">         --}}
    <h1 class="text-center">Edicion de Usuarios</h1>
    <br>
    <div class="row">
        <div class="col-12">
            <form class="form-control" id="formulario" method="post" action="{{ route('usuarios.update', $usuario) }}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="id_empleado" class="form-label">Empleado</label>
                    <select class="form-control" name="id_empleado" id="id_empleado">
                        @foreach ($empleados as $empleado)
                            @if ($empleado->id == $emp)
                                <option value="{{ $empleado->id }}" selected>{{ $empleado->nombre }}
                                </option>
                            @else
                                <option value="{{ $empleado->id }}">{{ $empleado->nombre }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" id="username" name="username"
                        value="{{ $usuario->username }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ $usuario->email }}">
                </div>
                {{-- <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password"
                        value="{{ $usuario->password }}">
                </div> --}}
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-control" name="estado" id="estado">
                        @if ($usuario->estado == 1)
                            <option value="1" selected>Activo
                            </option>
                            <option value="0">Inactivo
                            </option>
                        @else
                            <option value="1">Activo
                            </option>
                            <option value="0" selected>Inactivo
                            </option>
                        @endif
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_rol_usuario" class="form-label">Rol</label>
                    <select class="form-control" name="id_rol_usuario" id="id_rol_usuario">
                        @foreach ($roles_usuario as $rol_usuario)
                            @if ($rol_usuario->id == $rol)
                                <option value="{{ $rol_usuario->id }}" selected>{{ $rol_usuario->nombre }}
                                </option>
                            @else
                                <option value="{{ $rol_usuario->id }}">{{ $rol_usuario->nombre }}
                                </option>
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
