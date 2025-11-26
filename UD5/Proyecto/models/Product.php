<?php
declare(strict_types=1);

class Product
{
    public static function all(PDO $pdo): array
    {
        $stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product ?: null;
    }

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

    public static function update(PDO $pdo, string $nombre, float $precio, int $stock): bool
    {
        $stmt = $pdo->prepare('
            UPDATE products
            SET nombre = :nombre,
                precio = :precio,
                stock = :stock
        ');
        return $stmt->execute([
            ':nombre' => $nombre,
            ':precio' => $precio,
            ':stock' => $stock
        ]);
    }

    public static function delete(PDO $pdo, int $id): bool
    {
        $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
