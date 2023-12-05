@extends('templates.main')
@section('title', "PQR's")
@section('content')
<div class="container mt-5">
    <h1>Agregar PQR</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ route('pqr.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombre_cliente">Nombre del Usuario:</label>
                    <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tipo_pqr">Seleccione el tipo de PQR:</label>
                    <select name="tipo_pqr" id="tipo_pqr" class="custom-select">
                        <option value="peticion">Petición</option>
                        <option value="queja">Queja</option>
                        <option value="reclamo">Reclamo</option>
                    </select>
                </div>
                <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="mensaje" class="form-control" rows="4" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar PQR</button>
            </form>
        </div>
        <div class="col-md-7">
            <h2>Historial de PQRs</h2>
            @if ($pqrs->isEmpty())
            <p>No hay PQRs registrados.</p>
            @else
            <div class="table-responsive">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Mensaje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pqrs as $pqr)
                        <tr>
                            <td>{{ $pqr->nombre_cliente }}</td>
                            <td>{{ $pqr->tipo }}</td>
                            <td style="overflow-wrap: break-word;">{{ $pqr->mensaje }}</td>
                            <!-- Modificado el estilo CSS para ajuste hacia abajo -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
    @auth
    <script>
        document.getElementById('nombre_cliente').value = '{{ auth()->user()->username }}';
    </script>
    @endauth
@endsection