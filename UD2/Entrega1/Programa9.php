<?php
// Ejemplo básico de uso de date() y getdate()

echo "<h2>Uso de date()</h2>";
echo "Fecha y hora actual: " . date("d/m/Y H:i:s") . "<br>";
echo "Solo el año: " . date("Y") . "<br>";
echo "Solo el mes: " . date("F") . "<br>";
echo "Solo el día: " . date("l") . "<br>";

echo "<h2>Uso de getdate()</h2>";
$infoFecha = getdate();
echo "Array completo:<br>";
echo "<pre>";
print_r($infoFecha);
echo "</pre>";
echo "Año: " . $infoFecha['year'] . "<br>";
echo "Mes: " . $infoFecha['mon'] . "<br>";
echo "Día: " . $infoFecha['mday'] . "<br>";
?>
