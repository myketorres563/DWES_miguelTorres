<?php
// Programa14.php
echo "<h3>Ejemplo con for</h3>";
for ($i = 1; $i <= 10; $i++) {  // de 1 a 10
    echo "Número: $i <br>";
}

echo "<h3>Ejemplo con while</h3>";
$j = 2;
while ($j <= 10) {              // mientras sea menor o igual a 10
    echo "Par: $j <br>";
    $j += 2;                    // aumenta de 2 en 2
}

echo "<h3>Ejemplo con do...while</h3>";
$k = 5;
do {
    echo "Cuenta atrás: $k <br>";
    $k--;                       // resta 1
} while ($k >= 0);              // hasta llegar a 0
?>
