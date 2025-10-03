<?php
echo "<h2>Programa20 - Funciones más usadas en PHP</h2><br>";

// 1. strlen() → Devuelve el número de caracteres de una cadena
$cadena = "Programación en PHP";
echo "La longitud de '$cadena' es: " . strlen($cadena) . "<br>";

// 2. strtoupper() → Convierte un string a mayúsculas
echo "En mayúsculas: " . strtoupper($cadena) . "<br>";

// 3. strtolower() → Convierte un string a minúscula
echo "En minúsculas: " . strtolower($cadena) . "<br>";

// 4. substr() → Obtiene una subcadena desde una posición
echo "Subcadena (0 a 11): " . substr($cadena, 0, 11) . "<br>";

// 5. date() → Devuelve la fecha y hora en el formato especificado
echo "Fecha actual: " . date("d/m/Y H:i:s") . "<br>";

// 6. number_format() → Da formato numérico con decimales y separadores
$precio = 12345.6789;
echo "Precio formateado: " . number_format($precio, 2, ",", ".") . " €<br>";

// 7. rand() → Genera un número aleatorio entre un rango
echo "Número aleatorio entre 1 y 100: " . rand(1, 100) . "<br>";

// 8. array_sum() → Suma todos los valores numéricos de un array
$numeros = [2, 4, 6, 8, 10];
echo "Suma de [2,4,6,8,10]: " . array_sum($numeros) . "<br>";

// 9. in_array() → Comprueba si un valor está en un array
$colores = ["rojo", "verde", "azul"];
echo "¿Existe 'verde' en el array de colores? " . (in_array("verde", $colores) ? "Sí" : "No") . "<br>";

// 10. implode() → Convierte un array en una cadena
echo "Colores en una cadena: " . implode(", ", $colores) . "<br>";