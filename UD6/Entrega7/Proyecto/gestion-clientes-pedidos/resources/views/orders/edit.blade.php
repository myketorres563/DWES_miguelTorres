<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Pedido</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h1>Editar Pedido: {{ $order->numero_pedido }}</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.update', $order) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nº Pedido:</label><br>
        <input type="text" name="numero_pedido" value="{{ old('numero_pedido', $order->numero_pedido) }}"><br><br>

        <label>Cliente:</label><br>
        <select name="client_id" required>
            @foreach($clients as $client)
                <option value="{{ $client->id }}" 
                    {{-- Si el ID del cliente coincide con el del pedido, lo marcamos --}}
                    {{ $order->client_id == $client->id ? 'selected' : '' }}>
                    {{ $client->nombre }}
                </option>
            @endforeach
        </select><br><br>

        <label>Fecha:</label><br>
        <input type="date" name="fecha" value="{{ old('fecha', $order->fecha) }}"><br><br>

        <label>Estado:</label><br>
        <select name="estado">
            <option value="pendiente" {{ $order->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
            <option value="enviado" {{ $order->estado == 'enviado' ? 'selected' : '' }}>Enviado</option>
            <option value="entregado" {{ $order->estado == 'entregado' ? 'selected' : '' }}>Entregado</option>
            <option value="cancelado" {{ $order->estado == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
        </select><br><br>

        <label>Total (€):</label><br>
        <input type="number" step="0.01" name="total" value="{{ old('total', $order->total) }}"><br><br>

        <label>Notas:</label><br>
        <textarea name="notas">{{ old('notas', $order->notas) }}</textarea><br><br>

        <button type="submit">Actualizar Pedido</button>
        <a href="{{ route('orders.index') }}">Cancelar</a>
    </form>

</body>
</html>