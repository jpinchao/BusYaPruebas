@extends('templates.main')
@section('title', 'Retrasos')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Retrasos Notificados</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Notificaciones de Retrasos</h2>
                @if(count($notificaciones) > 0)
                    @foreach($notificaciones as $notificacion)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="card-title text-dark">Ruta: {{ $notificacion->ruta->nombre }}</h5>
                                <p class="card-text text-dark">Descripción: {{ $notificacion->descripcion }}</p>
                                <p class="card-text text-dark">Tiempo Estimado de Retraso: {{ $notificacion->tiempo_estimado }} minutos</p>
                                <p class="card-text text-dark">Registrado por: {{ $notificacion->user->username }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No hay notificaciones de retrasos.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
