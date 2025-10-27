<?php
namespace Proyecto\App\Model;
final class sobremesa extends equipos{

    private $tipoTorre;
    private $grafica;

    public function __construct($modelo, $marca, $precio, $tipoTorre, $grafica) {
        parent::__construct($modelo, $marca, $precio);
        $this->tipoTorre = $tipoTorre;
        $this->grafica = $grafica;
    }
    
    public function getDescripcionTecnica(): string {
        return "Sobremesa con torre {$this->tipoTorre} y tarjeta gráfica {$this->grafica}.";
    }

    public function getTipoTorre() {
        return $this->tipoTorre;
    }
    public function getGrafica() {
        return $this->grafica;
    }
    public function setTipoTorre($tipoTorre) {
        $this->tipoTorre = $tipoTorre;
    }
    public function setGrafica($grafica) {
        $this->grafica = $grafica;
    }

}
?>