<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Cliente</title>
</head>
<body>

    <h1>Crear Nuevo Cliente</h1>

    {{-- Muestra errores de validación si los hay --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf  {{-- ¡OBLIGATORIO! Token de seguridad --}}

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>Teléfono:</label><br>
        <input type="text" name="telefono" value="{{ old('telefono') }}"><br><br>

        <label>Dirección:</label><br>
        <textarea name="direccion">{{ old('direccion') }}</textarea><br><br>
        
        <label>
            <input type="checkbox" name="activo" value="1" checked> Cliente Activo
        </label><br><br>

        <button type="submit">Guardar Cliente</button>
        <a href="{{ route('clients.index') }}">Cancelar</a>
    </form>

</body>
</html>