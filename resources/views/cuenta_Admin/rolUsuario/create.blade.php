@extends('templates.main-Admin')
@section('title', 'Panel Roles Usuario')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Rol Usuario</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('rolUsuario.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="row">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles_usuario as $rol_usuario)
                    <tr>
                        <td>{{ $rol_usuario->nombre }}</td>
                        <td>{{ $rol_usuario->descripcion }}</td>
                        <td>
                            <a href="{{ route('rolUsuario.edit', $rol_usuario) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('rolUsuario.destroy', $rol_usuario) }}" method="post" class="d-inline">
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
