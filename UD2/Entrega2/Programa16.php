// Esta función calcula el precio final de un producto aplicando el IVA.
// No recibe argumentos y devuelve el precio final con IVA redondeado a 2 decimales.

<?php
// Función simple sin argumentos
function precioConIVA(): float {
    $precio = 100;  // definido dentro de la función
    $iva = 21;      // definido dentro de la función (IVA del 21%)
    $precioFinal = $precio + ($precio * $iva / 100);
    return round($precioFinal, 2);
}

// Ejemplo de uso
echo "Precio con IVA: " . precioConIVA() . " €<br>";
?>