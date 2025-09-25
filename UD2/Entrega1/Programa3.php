<?php
// Variables numéricas
$precioProducto1 = 12.34567;  
$precioProducto2 = 7.89123;    
$descuentoProducto1 = 0.12345678; 
$descuentoProducto2 = 0.98765432; 
$unidadesDisponibles = 150;     
$precioCientifico = 12345.6789; 
$precioBinario = 25;            
$precioReal = 45.67891;         

// Variables de cadena
$nombreProducto = "Cámara";
$descripcionProducto = "Cámara digital con zoom 10x";

// Mostrar por pantalla con especificadores de formato
echo "<h2>Información de Productos</h2>";

printf("Producto: %s<br>", $nombreProducto);
printf("Descripción: %s<br>", $descripcionProducto);
printf("Precio Producto 1: %.2f €<br>", $precioProducto1);
printf("Precio Producto 2: %.2f €<br>", $precioProducto2);
printf("Descuento Producto 1: %.4f<br>", $descuentoProducto1);
printf("Descuento Producto 2: %.4f<br>", $descuentoProducto2);
printf("Unidades disponibles: %d<br>", $unidadesDisponibles);
printf("Precio en notación científica: %.2e<br>", $precioCientifico);
printf("Precio en binario: %b<br>", $precioBinario);
printf("Precio real con 3 decimales: %.3f €<br>", $precioReal);
?>
