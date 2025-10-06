<?php
// Imprime un título simple en la página
print "<br/><br/>  ARGUMENTOS POR valor y por referencia <br  /> ";

// Definición de la función precio_iva_referencia
// & $precio  -> se pasa por referencia para modificar la variable original fuera de la función
// $iva = 0.21 -> valor por defecto del IVA (modificado según el enunciado)
function precio_iva_referencia (&$precio /* referencia a la variable precio */, $iva = 0.21) {
    // Multiplica el precio por (1 + iva) para aplicar el impuesto
    $precio *= (1 + $iva);
    // Devuelve el precio calculado (aunque la variable ya se modificó por referencia)
    return $precio;
}

// Asignamos un precio inicial
$precio = 10;  // precio antes de aplicar IVA

// Mostramos el precio ANTES de llamar a la función
print "<br/><br/>1- ANTES de llamar a la función:  El precio con IVA es ".$precio;  // imprime 10

// Llamada a la función que modifica $precio por referencia usando el IVA por defecto 0.21
precio_iva_referencia($precio);

// Mostramos el precio DESPUÉS de llamar a la función (la variable $precio ya ha cambiado)
print "<br/>2- DESPUÉS de llamar a la función:  El precio con IVA es ". $precio;  // imprime 12.1

// Indicamos al alumno qué return se ha usado
print "<br/><b>3- Anota en tus apuntes qué RETURN has usado, Soy Manu, y he usado el $ precio :)</b>";
?>