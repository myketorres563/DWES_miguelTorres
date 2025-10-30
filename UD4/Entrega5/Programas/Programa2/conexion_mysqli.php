<?php
  /*   $cn = mysqli_connect("localhost", "root", "", "dwes");
    if (!$cn) { die("Error de conexión: " . mysqli_connect_error()); }
    mysqli_set_charset($cn, "utf8mb4");


    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 */
function db(): mysqli {
    static $cn = null;
    if ($cn instanceof mysqli) {
        return $cn;
    }
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "dwes";              // <-- Base de datos: dwes


    $cn = mysqli_connect($host, $user, $pass, $db);
    mysqli_set_charset($cn, "utf8mb4");
    echo "Conexión OK <br>";
    return $cn;


}






?>
