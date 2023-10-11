<table>
    <thead style="background-color: #94b43b">
        <tr>
            <th>Placa</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Capacidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->placa }}</td>
                <td>{{ $vehiculo->modelo }}</td>
                <td>{{ $vehiculo->marca }}</td>
                <td>{{ $vehiculo->capacidad }}</td>
            </tr>
        @endforeach
    </tbody>
</table>