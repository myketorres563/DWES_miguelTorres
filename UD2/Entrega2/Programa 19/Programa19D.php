<?php
// 4. require_once (solo se incluirá una vez)
require_once "funciones.php";
require_once "funciones.php"; // se ignora
echo "20 / 5 = " . dividir(20, 5) . "<br>";
?>