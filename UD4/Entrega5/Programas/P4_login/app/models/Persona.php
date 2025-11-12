<?php
require_once __DIR__ . '/../../config/database.php';

class Persona {
    private $conn;

    /**
     * The function creates a new Database object and establishes a connection to the database.
     */
    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function login($usuario, $contrasena) {
        try {
            $query = "SELECT * FROM ud4_persona WHERE usuario = :usuario AND contrasena = :contrasena";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':usuario',  $usuario  );
            $stmt->bindParam(':contrasena', $contrasena );
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC); // Devuelve un registro si lo encuentra
        } catch (PDOException $e) {
            die("Error al realizar la consulta: " . $e->getMessage());
        }
    }
}
?>