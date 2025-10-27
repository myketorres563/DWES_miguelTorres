<?php
    class equipos{
        private $modelo;
        private $marca;
        private $precio;

        public function __construct($modelo, $marca, $precio) {
            $this->modelo = $modelo;
            $this->marca = $marca;
            $this->precio = $precio;
        }
        public function getModelo() {
            return $this->modelo;
        }
        public function getMarca() {
            return $this->marca;
        }
        public function getPrecio() {
            return $this->precio;
        }
        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }
        public function setMarca($marca) {
            $this->marca = $marca;
        }
        public function setPrecio($precio) {
            $this->precio = $precio;
        }

    }
?>