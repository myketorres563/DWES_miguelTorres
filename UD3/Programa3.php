<?php
class Persona {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        echo "Objeto creado con nombre: $this->nombre<br>";
    }

    public function saludar() {
        echo "Hola, soy $this->nombre";
    }

    public function __destruct() {
        echo "<br>Objeto destruido.";
    }
}

//Crea al menos 3 objetos de la clase persona
// y muestra un saludo para cada uno
$persona1 = new Persona("Miguel");
$persona1->saludar();
$persona2 = new Persona("Ana");
$persona2->saludar();
$persona3 = new Persona("Luis");
$persona3->saludar();
?>