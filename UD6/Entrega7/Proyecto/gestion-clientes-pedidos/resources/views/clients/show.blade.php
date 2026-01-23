<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Cliente</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="container flex-between" style="padding: 1.5rem 0;">
            <h1 style="font-size: 1.875rem; margin: 0;">Detalle del Cliente</h1>
            <a href="{{ route('clients.index') }}" class="btn btn-outline">← Volver</a>
        </div>
    </header>

    <main class="container" style="margin-top: 2rem; margin-bottom: 2rem;">
        <div class="grid grid-2">
            <section class="card">
                <h2 class="card-header">{{ $client->nombre }}</h2>
                <div class="card-body">
                    <p><strong style="color: var(--text-dark);">📧 Email:</strong><br>{{ $client->email }}</p>
                    <p><strong style="color: var(--text-dark);">📱 Teléfono:</strong><br>{{ $client->telefono }}</p>
                    <p><strong style="color: var(--text-dark);">📍 Dirección:</strong><br>{{ $client->direccion }}</p>
                    <p>
                        <strong style="color: var(--text-dark);">Estado:</strong><br>
                        @if ($client->activo)
                            <span class="badge badge-success">✓ Activo</span>
                        @else
                            <span class="badge badge-danger">✗ Inactivo</span>
                        @endif
                    </p>
                </div>
                <div style="display: flex; gap: 1rem; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">
                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-secondary" style="flex: 1; text-align: center; text-decoration: none;">Editar</a>
                </div>
            </section>

            <section class="card">
                <h2 class="card-header">Pedidos Asociados</h2>
                <div class="card-body">
                    @if ($client->orders->count())
                        <div style="overflow-x: auto;">
                            <table style="font-size: 0.9rem;">
                                <thead>
                                    <tr>
                                        <th>Nº Pedido</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->orders as $order)
                                        <tr>
                                            <td><strong>#{{ $order->numero_pedido }}</strong></td>
                                            <td>{{ \Carbon\Carbon::parse($order->fecha)->format('d/m/Y') }}</td>
                                            <td>
                                                @if ($order->estado == 'cancelado')
                                                    <span class="badge badge-danger">Cancelado</span>
                                                @elseif ($order->estado == 'pendiente')
                                                    <span class="badge badge-warning">Pendiente</span>
                                                @else
                                                    <span class="badge badge-success">{{ ucfirst($order->estado) }}</span>
                                                @endif
                                            </td>
                                            <td><strong>{{ number_format($order->total, 2) }} €</strong></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info" style="justify-content: center; margin: 0;">
                            ℹ️ No hay pedidos registrados para este cliente
                        </div>
                    @endif
                </div>
            </section>
        </div>
    </main>
</body>
</html>