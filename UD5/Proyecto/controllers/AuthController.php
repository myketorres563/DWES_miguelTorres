<?php
declare(strict_types=1);

class AuthController
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Muestra el formulario de login.
     */
    public function login(): void
    {
        $error = $_GET['error'] ?? null;
        require __DIR__ . '/../views/auth/login.php';
    }

    /**
     * Procesa el login.
     */
    public function doLogin(): void
{
    ensureSession();

    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        $error = 'Debes rellenar usuario y contraseña.';
        require __DIR__ . '/../views/auth/login.php';
        return;
    }

    $user = User::findByUsername($this->pdo, $username);

    if (!$user || !password_verify($password, $user->password)) {
        $error = 'Usuario o contraseña incorrectos.';
        require __DIR__ . '/../views/auth/login.php';
        return;
    }

    // --- SESIÓN (lo mantienes) ---
    $_SESSION['user'] = [
        'id' => $user->id,
        'username' => $user->username,
    ];

    // --- AÑADIR COOKIE ---
    // Guarda el nombre del usuario durante 1 hora
    setcookie("usuario", $user->username, time() + 3600, "/");

    header('Location: index.php?c=product&a=index');
    exit;
}


    /**
     * Cierra la sesión.
     */
    public function logout(): void
    {
        ensureSession();
        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params['path'],
                $params['domain'],
                $params['secure'],
                $params['httponly']
            );
        }
        setcookie("usuario", "", time() - 3600, "/");
        session_destroy();
        header('Location: index.php?c=auth&a=login');
        exit;
    }






    
}
?>