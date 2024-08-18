@extends('templates.main')
@section('title', 'Notificar Retrasos')
@section('content')
    <h1 style="text-align: center">Bienvenido</h1>

    <div class="audit-filters">
        <form method="GET" action="{{ route('CuentaAuditor') }}">
            <label for="start_date">Fecha Inicio:</label>
            <input type="date" id="start_date" name="start_date" value="{{ request()->get('start_date') }}">

            <label for="end_date">Fecha Fin:</label>
            <input type="date" id="end_date" name="end_date" value="{{ request()->get('end_date') }}">

            <label for="action_type">Tipo de Acción:</label>
            <select id="action_type" name="action_type">
                <option value="">Todos</option>
                <option value="created" {{ request()->get('action_type') == 'created' ? 'selected' : '' }}>Creación</option>
                <option value="updated" {{ request()->get('action_type') == 'updated' ? 'selected' : '' }}>Actualización</option>
                <option value="deleted" {{ request()->get('action_type') == 'deleted' ? 'selected' : '' }}>Eliminación</option>
            </select>

            <button type="submit">Filtrar</button>
        </form>
    </div>

    <div class="audit-list">
        @if($audits->count())
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <thead>
                    <tr>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">ID</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Modelo</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Acción</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Usuario</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Cambios</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($audits as $audit)
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $audit->id }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $audit->auditable_type }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $audit->event }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $audit->user->name ?? 'Sistema' }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">
                                @php
                                    $newValues = json_decode($audit->new_values, true);
                                @endphp
                                @if($newValues)
                                    @foreach($newValues as $key => $value)
                                        <strong>{{ $key }}:</strong> {{ $value }}<br>
                                    @endforeach
                                @else
                                    No hay cambios
                                @endif
                            </td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $audit->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $audits->appends(request()->query())->links() }}
        @else
            <p>No hay registros para mostrar.</p>
        @endif
    </div>
@endsection
