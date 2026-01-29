<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Pedido</title>        
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

    <h1>Registrar Nuevo Pedido</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <label>Nº Pedido:</label><br>
        <input type="text" name="numero_pedido" placeholder="Ej: PED-001"><br><br>

        {{-- SELECTOR DE CLIENTE (Relación) --}}
        <label>Cliente:</label><br>
        <select name="client_id" required>
            <option value="">-- Selecciona un cliente --</option>
            @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->nombre }}</option>
            @endforeach
        </select><br><br>

        <label>Fecha:</label><br>
        <input type="date" name="fecha" value="{{ date('Y-m-d') }}"><br><br>

        <label>Estado:</label><br>
        <select name="estado">
            <option value="pendiente">Pendiente</option>
            <option value="enviado">Enviado</option>
            <option value="entregado">Entregado</option>
            <option value="cancelado">Cancelado</option>
        </select><br><br>

        <label>Total (€):</label><br>
        <input type="number" step="0.01" name="total"><br><br>

        <label>Notas:</label><br>
        <textarea name="notas"></textarea><br><br>

        <button type="submit">Guardar Pedido</button>
    </form>

</body>
</html>