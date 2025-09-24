<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primer Programa en PHP</title>
</head>
<body>
    <form method="POST" action="">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Verifica si se ha enviado un nombre
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        echo "<h2>¡Hola, " . $nombre . "!</h2>";
    }
    ?>
</body>
</html>