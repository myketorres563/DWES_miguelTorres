<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h1>Listado de Clientes</h1>

    {{-- BARRA DE NAVEGACIÓN SUPERIOR --}}
    <div style="margin-bottom: 20px;">
        <a href="{{ route('clients.create') }}" style="font-weight: bold;">+ Nuevo Cliente</a>
        <span> | </span>
        {{-- Aquí está el enlace que faltaba: --}}
        <a href="{{ route('orders.index') }}" style="font-weight: bold;">Ir a Pedidos ➡️</a>
    </div>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clients as $client)
                <tr>
                    <td>{{ $client->nombre }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->telefono }}</td>
                    <td>
                        {{-- Pequeño indicador visual de activo/inactivo --}}
                        <span style="color: {{ $client->activo ? 'green' : 'grey' }}">
                            {{ $client->activo ? 'Activo' : 'Inactivo' }}
                        </span>
                    </td>
                    <td>
                        <div style="display: flex; gap: 10px;">
                            {{-- Botón Ver (Detalle con pedidos) --}}
                            <a href="{{ route('clients.show', $client) }}">Ver</a>
                            
                            {{-- Botón Editar --}}
                            <a href="{{ route('clients.edit', $client) }}">Editar</a>

                            {{-- Botón Eliminar --}}
                            <form action="{{ route('clients.destroy', $client) }}" method="POST" onsubmit="return confirm('¿Estás seguro? Se borrarán también sus pedidos.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: red; border: none; background: none; cursor: pointer; text-decoration: underline;">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No hay clientes registrados.</td></tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>