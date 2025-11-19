<?php
// 1. LÓGICA PRIMERO (Antes de cualquier HTML)
session_start();

$db_path = 'database.sqlite';
$mensaje = ""; // Variable para guardar qué le diremos al usuario
$clase_alerta = ""; // Para ponerle color rojo o verde si usas CSS luego

try {
    $base = new PDO('sqlite:' . $db_path);
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!isset($_POST['login']) || !isset($_POST['password'])) {
        die("Error: Faltan datos.");
    }

    $login = htmlentities(addslashes($_POST["login"]));
    $password = htmlentities(addslashes($_POST["password"]));

    $sql = "SELECT * FROM ud5__usuarios_pass WHERE user = :login AND pass = :password";
    $resultado = $base->prepare($sql);
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();

    $registro = $resultado->fetch(PDO::FETCH_ASSOC);

    if ($registro) {
        // --- ÉXITO ---
        $_SESSION["usuario"] = $login;
        
        // Preparamos el mensaje
        $mensaje = "¡Adelante, " . $login . "!";
        
        // Programamos la redirección para dentro de 3 segundos
        header("refresh:3; url=usuarios_registrados.php");
        
    } else {
        // --- ERROR ---
        $mensaje = "Usuario o contraseña incorrectos. Redirigiendo...";
        
        // Programamos la redirección al login de nuevo en 3 segundos
        header("refresh:3; url=login.php");
    }

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

// 2. AHORA SÍ, CERRAMOS PHP Y MOSTRAMOS EL HTML
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Verificando...</title>
    <style>
        /* Un poco de estilo para que se vea centrado y bonito */
        body {
            font-family: sans-serif;
            text-align: center;
            margin-top: 100px;
            background-color: #f4f4f4;
        }
        .mensaje {
            border: 1px solid #ccc;
            padding: 20px;
            background: white;
            display: inline-block;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 { color: #333; }
    </style>
</head>
<body>

    <div class="mensaje">
        <h2><?php echo $mensaje; ?></h2>
        
        <p><em>Por favor espera, te estamos redirigiendo...</em></p>
        
        
    </div>

</body>
</html>