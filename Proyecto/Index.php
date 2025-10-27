<?php
use Proyecto\App\Model\persona;
use Proyecto\App\Model\equipos;
use Proyecto\App\Model\portatil;
use Proyecto\App\Model\sobremesa;
require_once __DIR__ . '/app/Model/persona.php';
require_once __DIR__ . '/app/Model/equipos.php';
require_once __DIR__ . '/app/Model/portatil.php';
require_once __DIR__ . '/app/Model/sobremesa.php';

// Crear personas directamente
$persona1 = new persona("Juan Pérez", "Calle Falsa 123", "123456789", "Tarjeta");
$persona2 = new persona("Ana López", "Avenida Siempre Viva 456", "987654321", "Efectivo");

// Crear pedidos para cada persona
$pedido1 = new portatil("XPS 15", "Dell", 1500, "15.6", "6h");
$pedido2 = new sobremesa("OMEN 30L", "HP", 2000, "Torre grande", "RTX 4070");

// Guardar en un array para manejarlo fácilmente
$personasConPedidos = [
    ['persona' => $persona1, 'pedido' => $pedido1],
    ['persona' => $persona2, 'pedido' => $pedido2],
];

// Mostrar los datos
foreach ($personasConPedidos as $registro) {
    $p = $registro['persona'];
    $e = $registro['pedido'];

    echo "<h2>Datos de la persona</h2>";
    echo "Nombre: " . $p->getNombre() . "<br>";
    echo "Dirección: " . $p->getDireccion() . "<br>";
    echo "Teléfono: " . $p->getTelefono() . "<br>";
    echo "Pago: " . $p->getPago() . "<br>";

    echo "<h3>Datos del pedido</h3>";
    echo "Modelo: " . $e->getModelo() . "<br>";
    echo "Marca: " . $e->getMarca() . "<br>";
    echo "Precio: " . $e->getPrecio() . "<br>";

    if ($e instanceof portatil) {
        echo "Tamaño pantalla: " . $e->getTamanoPantalla() . "<br>";
        echo "Batería: " . $e->getBateria() . "<br>";
    } elseif ($e instanceof sobremesa) {
        echo "Tipo torre: " . $e->getTipoTorre() . "<br>";
        echo "Gráfica: " . $e->getGrafica() . "<br>";
    }

    echo "<hr>";
}
