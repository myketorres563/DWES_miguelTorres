<?php

$db = new PDO('sqlite:data/app.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Tabla de usuarios
$db->exec("
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL,
    rol TEXT DEFAULT 'user'
);
");

// Usuario admin
$adminPass = password_hash("admin", PASSWORD_DEFAULT);
$stmt = $db->prepare("INSERT OR IGNORE INTO users (username, password, rol) VALUES (?, ?, ?)");
$stmt->execute(['admin', $adminPass, 'admin']);

// Otros 2 usuarios: Pedro y Luis con contraseña "1234"
$pedroPass = password_hash("1234", PASSWORD_DEFAULT);
$stmt->execute(['Pedro', $pedroPass, 'user']);

$luisPass = password_hash("1234", PASSWORD_DEFAULT);
$stmt->execute(['Luis', $luisPass, 'user']);

// Tabla de productos
$db->exec("
CREATE TABLE IF NOT EXISTS products (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    descripcion TEXT NOT NULL,
    precio REAL NOT NULL,
    stock INTEGER NOT NULL,
    categoria TEXT NOT NULL
);
");

// Productos de bricolaje
$db->exec("
INSERT INTO products (nombre, descripcion, precio, stock, categoria) VALUES
('Taladro percutor 750W', 'Taladro para bricolaje general', 89.99, 12, 'Herramientas'),
('Pintura acrílica blanca 5L', 'Bote de pintura interior', 24.50, 30, 'Pinturas'),
('Cemento rápido 25kg', 'Material de construcción para reformas', 12.00, 40, 'Materiales de construcción'),
('Tijeras de podar profesional', 'Tijeras para jardinería', 15.90, 20, 'Jardinería');
");

echo "Base de datos creada correctamente";

?>
