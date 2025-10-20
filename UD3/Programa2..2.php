<?php
class Coche {
    public $marca; 
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function obtenerInformacion() {
        return "Este es un coche de la marca $this->marca, modelo $this->modelo." . "\n";
    }
}

$coche1 = new Coche("Toyota", "Corolla");
$coche2 = new Coche("Ford", "Focus");

echo $coche1->obtenerInformacion();
echo $coche2->obtenerInformacion();

?>