<?php
class Persona {
    // Propiedades de la clase
    public $nombre;
    public $edad;

    // Constructor de la clase
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;  // Asigna el valor del parámetro $nombre a la propiedad $nombre del objeto
        $this->edad = $edad;      // Asigna el valor del parámetro $edad a la propiedad $edad del objeto
    }

    // Método para mostrar información de la persona
    public function mostrarInfo() {
        return "Nombre: $this->nombre, Edad: $this->edad";
    }
}

// Crear una instancia de la clase Persona usando el constructor
$persona1 = new Persona("Juan", 25);
echo $persona1->mostrarInfo(); // Salida: Nombre: Juan, Edad: 25

$persona2 = new Persona("María", 30);
echo $persona2->mostrarInfo(); // Salida: Nombre: María, Edad: 30
?>