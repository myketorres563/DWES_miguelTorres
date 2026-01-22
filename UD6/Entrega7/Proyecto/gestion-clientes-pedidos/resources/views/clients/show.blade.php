<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Cliente</title>
</head>
<body>

    <h1>Detalle del Cliente: {{ $client->nombre }}</h1>
    
    <p><strong>Email:</strong> {{ $client->email }}</p>
    <p><strong>Teléfono:</strong> {{ $client->telefono }}</p>
    <p><strong>Dirección:</strong> {{ $client->direccion }}</p>
    
    <hr>

    <h2>Pedidos Asociados</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Nº Pedido</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            {{-- Usamos la relación 'orders' definida en el modelo --}}
            @forelse ($client->orders as $order)
                <tr>
                    <td>{{ $order->numero_pedido }}</td>
                    <td>{{ $order->fecha }}</td>
                    
                    {{-- Lógica visual simple para el estado --}}
                    <td style="color: {{ $order->estado == 'cancelado' ? 'red' : 'green' }}">
                        {{ ucfirst($order->estado) }}
                    </td>
                    
                    <td>{{ number_format($order->total, 2) }} €</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Este cliente no tiene pedidos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <br>
    <a href="{{ route('clients.index') }}">Volver al listado</a>

</body>
</html>