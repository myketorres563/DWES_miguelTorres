<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo PHP con variables</title>
</head>
<body>
    <h1>Ejemplo de variable en PHP</h1>

    <?php
        // Primer bloque PHP: creamos la variable
        $nombre ="Miguel Torres";
    ?>

    <p>El valor de la variable es:</p>

    <?php
        // Segundo bloque PHP: mostramos la variable
        echo "<strong> $nombre</strong>";
    ?>
    //Ejemplo
    <?php
    $nombre = "Juan";
    print "Hola, " . $nombre . "!";
    ?>

    <?php
    echo "<h1>Hola, mundo!</h1>";
    ?>

    <?php
    echo 10 + 20;
    ?>




</body>
</html>