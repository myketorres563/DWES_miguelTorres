<?php
// Guardar el puntaje del jugador en una cookie válida por 1 día
setcookie("puntaje_jugador", "1500", time() + 86400, "/");

// Acceder al puntaje
if (isset($_COOKIE['puntaje_jugador'])) {
    echo "Tu puntaje actual es: " . $_COOKIE['puntaje_jugador'];
    // Modificar el nivel alcanzado por el jugador
setcookie("nivel_jugador", "2", time() + 86400, "/");

// Cambiar el nivel a 3
setcookie("nivel_jugador", "3", time() + 86400, "/");

echo "Has avanzado al nivel: " . $_COOKIE['nivel_jugador'];
}
if (isset($_COOKIE['nivel_jugador'])) {
    echo "Tu nivel actual es: " . $_COOKIE['nivel_jugador'];
}


foreach ($_COOKIE as $nombre => $valor) {
    setcookie($nombre, "", time() - 3600, "/");
}

echo "Todas las cookies han sido eliminadas. ¡Juego reiniciado!";
?>