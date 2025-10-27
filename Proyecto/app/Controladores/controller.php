<?php
use Proyecto\App\Model\persona;
use Proyecto\App\Model\equipos;
use Proyecto\App\Model\portatil;
use Proyecto\App\Model\sobremesa;
session_start();

require_once __DIR__ . '/../Model/persona.php';
require_once __DIR__ . '/../Model/equipos.php';
require_once __DIR__ . '/../Model/portatil.php';
require_once __DIR__ . '/../Model/sobremesa.php';

class Controller {

    // Mostrar formulario de datos personales
    public function showForm() {
        require_once __DIR__ . '/../Vistas/formulario_registro.php';
    }

    // Guardar datos personales y mostrar formulario del equipo
    public function handleForm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Guardar datos personales en sesión
            $_SESSION['persona'] = [
                'nombre' => $_POST['nombre'] ?? '',
                'direccion' => $_POST['direccion'] ?? '',
                'telefono' => $_POST['telefono'] ?? '',
                'pago' => $_POST['pago'] ?? ''
            ];
            // Mostrar formulario del pedido
            $this->showPedidoForm();
        } else {
            $this->showForm();
        }
    }

    // Mostrar formulario de pedido
    public function showPedidoForm() {
        require_once __DIR__ . '/../Vistas/formulario_pedido.php';
    }

    // Recoger datos del pedido y mostrar ventana emergente
    public function handlePedido() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo = $_POST['tipoEquipo'] ?? '';
            $modelo = $_POST['modelo'] ?? '';
            $marca = $_POST['marca'] ?? '';
            $precio = $_POST['precio'] ?? '';

            // Crear objeto según el tipo seleccionado
            if ($tipo === 'portatil') {
                $tamanoPantalla = $_POST['tamanoPantalla'] ?? '';
                $bateria = $_POST['bateria'] ?? '';
                $equipo = new portatil($modelo, $marca, $precio, $tamanoPantalla, $bateria);
            } elseif ($tipo === 'sobremesa') {
                $tipoTorre = $_POST['tipoTorre'] ?? '';
                $grafica = $_POST['grafica'] ?? '';
                $equipo = new sobremesa($modelo, $marca, $precio, $tipoTorre, $grafica);
            }

            // Guardar en sesión
            $_SESSION['pedido'] = $equipo;

            // Mostrar ventana emergente con todos los datos
            require_once __DIR__ . '/../Vistas/result.php';
        }
    }
}
