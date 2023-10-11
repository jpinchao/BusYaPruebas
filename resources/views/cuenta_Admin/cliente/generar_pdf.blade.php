<table>
    <thead style="background-color: #94b43b">
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->cedula }}</td>
                <td>{{ $cliente->telefono }}</td>
            </tr>
        @endforeach
    </tbody>
</table>