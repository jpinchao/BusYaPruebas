@extends('templates.main')
{{-- @section('title', 'Rutas y Horarios') --}}
@section('title', 'Rutas Urbanas')
@section('content')
    <form>
        <label for="">Origen:</label>
        <br>
        <select class="form-select" aria-label="Default select example">
            <option selected disabled>seleccione...</option>
            <option value="1">Origen uno</option>
            <option value="2">Origen dos</option>
            <option value="3">Origen tres</option>
        </select>
        <br>
        <label for="">Destino:</label>
        <br>
        <select class="form-select" aria-label="Default select example">
            <option selected disabled>seleccione...</option>
            <option value="1">Destino uno</option>
            <option value="2">Destino dos</option>
            <option value="3">Destino tres</option>
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    <br>
    <br>

    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css">
    <div id="map" style="width: 400px; height: 300px;"></div>
    <script src="{{asset('js/functions/rutes.js')}}"></script>
@endsection
