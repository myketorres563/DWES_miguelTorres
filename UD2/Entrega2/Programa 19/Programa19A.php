<?php
echo "<h2>Pruebas de include / require</h2>";
// 1. include
include "funciones.php";
echo ("Hola, esto es un include<br>");
echo saludar("Ana") . "<br>";

?>