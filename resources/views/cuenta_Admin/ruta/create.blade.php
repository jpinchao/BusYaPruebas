@extends('templates.main-Admin')
@section('title', 'Panel Rutas')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Rutas</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('rutasyhorarios.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-control" name="id_tipo_ruta" id="tipo_ruta">
                            @foreach ($tipos_ruta as $tipo_ruta)
                                <option value="{{ $tipo_ruta->id }}">{{ $tipo_ruta->nombre }}</option>
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
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rutas as $ruta)
                    @php
                        $tipo = collect($tipos_ruta)
                            ->where('id', $ruta->id_tipo_ruta)
                            ->first()->nombre;
                    @endphp
                    <tr>
                        <td>{{ $ruta->nombre }}</td>
                        <td>{{ $tipo }}</td>
                        <td>
                            <a href="{{ route('rutasyhorarios.edit', $ruta) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('rutasyhorarios.destroy', $ruta) }}" method="post" class="d-inline">
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
