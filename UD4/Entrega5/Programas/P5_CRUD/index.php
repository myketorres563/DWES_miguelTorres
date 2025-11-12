<?php
include 'controllers/CocheController.php';

$controllers = new CocheController($pdo);

$action = $_GET['action'] ?? 'index';

    switch ($action) {
        case 'crear':
            $controllers->crear();
            break;
        case 'editar':
            $controllers->editar();
            break;
        case 'eliminar':
            $controllers->eliminar();
            break;
        default:
            $controllers->index();
            break;
    }
?>