<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>

    <h1>Editar Cliente: {{ $client->nombre }}</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT') 

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre', $client->nombre) }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email', $client->email) }}"><br><br>

        <label>Teléfono:</label><br>
        <input type="text" name="telefono" value="{{ old('telefono', $client->telefono) }}"><br><br>

        <label>Dirección:</label><br>
        <textarea name="direccion">{{ old('direccion', $client->direccion) }}</textarea><br><br>
        
        <label>
            {{-- Marcamos el checkbox solo si el cliente es activo --}}
            <input type="checkbox" name="activo" value="1" {{ $client->activo ? 'checked' : '' }}> 
            Cliente Activo
        </label><br><br>

        <button type="submit">Actualizar Cliente</button>
        <a href="{{ route('clients.index') }}">Cancelar</a>
    </form>

</body>
</html>