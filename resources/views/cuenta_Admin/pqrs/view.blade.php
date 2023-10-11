@extends('templates.main-Admin')
@section('title', 'Panel Pqrs')
@section('content')

    <h1 class="text-center">Lista de pqrs</h1>
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre Cliente</th>
                <th scope="col">Email</th>
                <th scope="col">Mensaje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pqrs as $pqr)
                <tr>
                    <td>{{ $pqr->nombre_cliente }}</td>
                    <td>{{ $pqr->Email }}</td>
                    <td>{{ $pqr->Mensaje }}</td>
                    <td>
                        <!--
                                <a href="{{ route('pqrs.edit', $cliente) }}" class="btn btn-warning">Editar</a>
    -->
                        <form action="{{ route('pqrs.destroy', $pqr) }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
