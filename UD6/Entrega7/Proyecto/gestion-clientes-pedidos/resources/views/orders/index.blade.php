<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Pedidos</title>
    {{-- Esta línea conecta con tu archivo CSS en resources --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h1>Listado de Pedidos</h1>

    {{-- BARRA DE NAVEGACIÓN SUPERIOR --}}
    <div style="margin-bottom: 20px;">
        <a href="{{ route('orders.create') }}" style="font-weight: bold;">+ Nuevo Pedido</a>
        <span> | </span>
        {{-- Enlace de retorno a Clientes --}}
        <a href="{{ route('clients.index') }}" style="font-weight: bold;">Ir a Clientes ➡️</a>
    </div>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nº Pedido</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $order->numero_pedido }}</td>
                    
                    {{-- Relación: Nombre del cliente --}}
                    <td>{{ $order->client->nombre }}</td>
                    
                    <td>{{ $order->fecha }}</td>
                    
                    <td>
                        {{-- Lógica de colores para el estado (Similar al activo/inactivo de clientes) --}}
                        <span style="
                            font-weight: bold;
                            @if($order->estado == 'cancelado') color: red;
                            @elseif($order->estado == 'entregado') color: green;
                            @elseif($order->estado == 'enviado') color: blue;
                            @else color: orange; 
                            @endif
                        ">
                            {{ ucfirst($order->estado) }}
                        </span>
                    </td>
                    
                    <td>{{ number_format($order->total, 2) }} €</td>

                    <td>
                        <div style="display: flex; gap: 10px;">
                            {{-- Botón Editar --}}
                            <a href="{{ route('orders.edit', $order) }}">Editar</a>

                            {{-- Botón Eliminar --}}
                            <form action="{{ route('orders.destroy', $order) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas borrar este pedido?');">
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
                <tr><td colspan="6" style="text-align: center;">No hay pedidos registrados.</td></tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>