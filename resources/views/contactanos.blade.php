@extends('templates.main')
@section('title', 'Contactanos')
@section('content')
    <h1>Contáctanos</h1>
    <p>Envíanos tus comentarios y sugerencias</p>
    <form action="{{ route('pqrs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre_cliente" placeholder="Escribe tu nombre">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Escribe tu email">
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
