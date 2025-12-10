<?php
declare(strict_types=1);

class Product
{
    // Obtiene todos los productos
    public static function all(PDO $pdo): array
    {
        $stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Busca un producto por su ID
    public static function find(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product ?: null;
    }

    // Crea un nuevo producto
    public static function create(PDO $pdo, string $nombre, float $precio, int $stock): bool
    {
        $stmt = $pdo->prepare("
            INSERT INTO products (nombre, descripcion, precio, stock, categoria)
            VALUES (:nombre, :descripcion, :precio, :stock, :categoria)
        ");
        return $stmt->execute([
            ':nombre' => $nombre,
            ':descripcion' => '',
            ':precio' => $precio,
            ':stock' => $stock,
            ':categoria' => 'General'
        ]);
    }

    // Actualiza un producto existente por su ID
public static function update(PDO $pdo, int $id, string $nombre, float $precio, int $stock): bool
{
    $stmt = $pdo->prepare('
        UPDATE products
        SET nombre = :nombre,
            precio = :precio,
            stock = :stock
        WHERE id = :id
    ');

    return $stmt->execute([
        ':id' => $id,
        ':nombre' => $nombre,
        ':precio' => $precio,
        ':stock' => $stock
    ]);
}


    // Elimina un producto por ID
    public static function delete(PDO $pdo, int $id): bool
    {
        $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}