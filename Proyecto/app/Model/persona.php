<?php
namespace Proyecto\App\Model;
class persona
{
    private $nombre;
    private $direccion;
    private $telefono;
    private $pago;
    public function __construct($nombre, $direccion, $telefono, $pago){
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->pago = $pago;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getPago()
    {
        return $this->pago;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    function setPago($pago)
    {
        $this->pago = $pago;
    }
}
?>