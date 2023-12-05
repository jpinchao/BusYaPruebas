@extends('templates.main')
@section('title', 'BusYa S.A.S.')
@section('content')
    <h1 style="text-align: center">Bienvenido Conductor</h1>
    <!-- Formulario para notificar imprevistos o retrasos -->
    <div class="container mt-5">
        <h2>Notificar Imprevistos o Retrasos</h2>
        <form action="{{ route('notificar') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="ruta">Seleccione la Ruta o Autobús:</label>
                <select name="ruta" id="ruta" class="form-control" required>
                    <!-- Opciones de rutas o autobuses, puedes obtenerlas desde la base de datos -->
                    <option value="ruta1">Ruta 1</option>
                    <option value="ruta2">Ruta 2</option>
                    <option value="ruta3">Ruta 3</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción del Imprevisto o Retraso:</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="tiempo_estimado">Tiempo Estimado de Retraso (minutos):</label>
                <input type="number" name="tiempo_estimado" id="tiempo_estimado" class="form-control" required>
            </div>

            <!-- Otros campos necesarios según la historia de usuario -->

            <br>
            <!-- Botón para enviar la notificación -->
            <button type="submit" class="btn btn-primary">Notificar</button>
        </form>
    </div>
@endsection
