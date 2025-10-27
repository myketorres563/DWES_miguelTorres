<?php
class portatil extends equipos{
    private $tamanoPantalla;
    private $bateria;

    public function __construct($modelo, $marca, $precio, $tamanoPantalla, $bateria) {
        parent::__construct($modelo, $marca, $precio);
        $this->tamanoPantalla = $tamanoPantalla;
        $this->bateria = $bateria;
    }

    public function getTamanoPantalla() {
        return $this->tamanoPantalla;
    }
    public function getBateria() {
        return $this->bateria;
    }
    public function setTamanoPantalla($tamanoPantalla) {
        $this->tamanoPantalla = $tamanoPantalla;
    }
    public function setBateria($bateria) {
        $this->bateria = $bateria;
    }
    
}
?>