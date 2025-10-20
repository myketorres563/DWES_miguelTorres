<?php
class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
}

// Crear un objeto de la clase
$obj = new ClaseSencilla();
$obj->mostrarVar(); // Muestra 'un valor predeterminado'
?>