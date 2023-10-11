@extends('templates.main-Admin')
{{-- @section('title', 'Autolegal S.A.S.') --}}
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pagina de Inicio</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
            </div>
        </div>
    </div>
    <input type="hidden" id="vehi-data" value="{{ $vehiculos }}"></input>
    <div id='grafico'>
    </div>
    <script src="https://cdn.plot.ly/plotly-2.20.0.min.js"></script> <!-- Plotly.js -->
    <script src='{{ asset('js/functions/graficos.js') }}'></script>
@endsection
