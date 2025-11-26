<?php
declare(strict_types=1);

class ProductController
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Asegura que el usuario esté logueado
     */
    private function requireLogin(): void
    {
        ensureSession();
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?c=auth&a=login');
            exit;
        }
    }

    /**
     * Listado de productos
     */
    public function index(): void
    {
        $this->requireLogin();
        $products = Product::all($this->pdo);
        require __DIR__ . '/../views/product/index.php';
    }

    /**
     * Formulario para crear un producto
     */
    public function create(): void
    {
        $this->requireLogin();
        $product = ['id' => null, 'name' => '', 'price' => '', 'stock' => ''];
        $action = 'store';
        require __DIR__ . '/../views/product/form.php';
    }

    /**
     * Guardar producto (con IVA incluido)
     */
    public function store(): void
    {
        $this->requireLogin();

        $name = trim($_POST['name'] ?? '');
        $priceStr = trim($_POST['price'] ?? '');
        $stockStr = trim($_POST['stock'] ?? '');

        if ($name === '' || $priceStr === '' || $stockStr === '') {
            $error = 'Todos los campos son obligatorios.';
            $product = ['id' => null, 'name' => $name, 'price' => $priceStr, 'stock' => $stockStr];
            $action = 'store';
            require __DIR__ . '/../views/product/form.php';
            return;
        }

        $price = (float)$priceStr;
        $stock = (int)$stockStr;

        // Sumar IVA del 21%
        $priceConIva = round($price * 1.21, 2);

        Product::create($this->pdo, $name, $priceConIva, $stock);

        header('Location: index.php?c=product&a=index');
        exit;
    }

    /**
     * Formulario para editar producto
     */
    public function edit(): void
    {
        $this->requireLogin();

        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $product = Product::find($this->pdo, $id);

        if (!$product) {
            http_response_code(404);
            echo 'Producto no encontrado';
            return;
        }

        $action = 'update';
        require __DIR__ . '/../views/product/form.php';
    }

    /**
     * Actualizar producto (con IVA incluido)
     */
    public function update(): void
    {
        $this->requireLogin();

        $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
        $name = trim($_POST['nombre'] ?? '');
        $priceStr = trim($_POST['precio'] ?? '');
        $stockStr = trim($_POST['stock'] ?? '');

        if ($name === '' || $priceStr === '' || $stockStr === '') {
            $error = 'Todos los campos son obligatorios.';
            $product = ['id' => $id, 'nombre' => $name, 'precio' => $priceStr, 'stock' => $stockStr];
            $action = 'update';
            require __DIR__ . '/../views/product/form.php';
            return;
        }

        $price = (float)$priceStr;
        $stock = (int)$stockStr;

        // Sumar IVA del 21%
        $priceConIva = round($price * 1.21, 2);

        Product::update($this->pdo, $id, $name, $priceConIva, );

        header('Location: index.php?c=product&a=index');
        exit;
    }

    /**
     * Eliminar producto
     */
    public function delete(): void
    {
        $this->requireLogin();

        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if ($id > 0) {
            Product::delete($this->pdo, $id);
        }

        header('Location: index.php?c=product&a=index');
        exit;
    }
}
?>