<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Listado de Clientes</h1>
    
    <a href="{{ route('clients.create') }}">Nuevo Cliente</a>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->nombre }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->telefono }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client) }}">Ver</a>
                        <a href="{{ route('clients.edit', $client) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>