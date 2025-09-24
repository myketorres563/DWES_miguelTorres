<?php
    //Codigo PHP
echo "Programa 1";

//Oodigo HTML
echo "<h1>Hola Mundo</h1>";

//Se utiliza <br> para saltos de linea.
echo "Esta es la primera línea.<br>";
echo "Esta es la segunda línea.<br><br>";

echo "<h2>PHP Tipos de datos</h2>";
//Las variables en PHP se definen con el simbolo $.
$nombre = "Miguel";
$edad = 18;
$saludo = "Hola, mundo!";
$esVerdad = true;
$colores = array("rojo", "verde", "azul");
class Coche {
    public $marca;
    public function __construct($marca) {
        $this->marca = $marca;
    }
}

$miCoche = new Coche("Toyota");
$vacio = null;

// Corregido el cierre de la etiqueta h2
echo "<h2>Mostrar tipos de datos creados</h2><br><br>";
echo "Mi nombre es $nombre y tengo $edad años.<br>";
if ($esVerdad) {
    echo "Esto es verdadero.<br>";
} else {
    echo "Esto es falso.<br>";
}
echo "Colores favoritos: " . implode(", ", $colores) . ".<br>";
echo "Marca de mi coche: " . $miCoche->marca . ".<br>";
var_dump($vacio); 

?>