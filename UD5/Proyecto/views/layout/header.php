<?php
ensureSession();
$user = $_SESSION['user'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ferreterias Miguel</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
<nav class="nav">
    <div class="nav-left">
        <span class="logo">Ferreterias Miguel</span>
    </div>
    <div class="nav-right">
        <?php if ($user): ?>
            <span class="nav-user"><?= htmlspecialchars($user['username']) ?></span>
            <a href="index.php?c=auth&a=logout">Cerrar sesión</a>
        <?php endif; ?>
    </div>
</nav>
<main class="container">