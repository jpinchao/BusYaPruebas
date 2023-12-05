@extends('templates.main')
@section('title', 'Notificar Retrasos')
@section('content')
    <h1 style="text-align: center">Bienvenido Conductor</h1>

    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Mitad izquierda - Formulario de notificación -->
            <div class="col-md-6">
                <h2>Notificar Imprevistos o Retrasos</h2>
                <form action="{{ route('notificar') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="ruta">Seleccione la Ruta o Autobús:</label>
                        <select name="ruta" id="ruta" class="form-control" required>
                            @foreach($rutas as $ruta)
                                <option value="{{ $ruta->id }}">{{ $ruta->nombre }}</option>
                            @endforeach
                        </select>
                        <!-- Campo oculto para guardar el ID de la ruta seleccionada -->
                        <input type="hidden" name="ruta_id" id="ruta_id" value="{{ $rutas->first()->id }}">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción del Imprevisto o Retraso:</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tiempo_estimado">Tiempo Estimado de Retraso (minutos):</label>
                        <input type="number" name="tiempo_estimado" id="tiempo_estimado" class="form-control" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Notificar</button>
                </form>
            </div>

            <!-- Mitad derecha - Lista de notificaciones -->
            <div class="col-md-6">
                <h2>Notificaciones de Retrasos</h2>
                @if(count($notificaciones) > 0)
                    <ul class="list-group">
                        @foreach($notificaciones as $notificacion)
                            <li class="list-group-item mb-3">
                                <h5 class="mb-1">Ruta: {{ $notificacion->ruta->nombre }}</h5>
                                <p class="mb-1">Descripción: {{ $notificacion->descripcion }}</p>
                                <p class="mb-1">Tiempo Estimado de Retraso: {{ $notificacion->tiempo_estimado }} minutos</p>
                                <p class="mb-0">Registrado por: {{ $notificacion->user->username }}</p>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>No hay notificaciones de retrasos.</p>
                @endif

            </div>
        </div>
    </div>
    <script>
        document.getElementById('ruta').addEventListener('change', function () {
            document.getElementById('ruta_id').value = this.value;
        });
    </script>
@endsection
