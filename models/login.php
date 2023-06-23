<?php
include 'User.php';
require '../controller/controllerLogin.php';
class Login{
    private $nickname;
    private $password;
    private $login;

    private $user;
    private $db;

    

    public function __construct(){
        $this->db = Conexion::conectar();
        $this->user = User::class;
    }

    public function getTipo(){
        $sql = "SELECT tipo password FROM usuario WHERE nombre='$nickname' AND password='$password'";
        $resultado = $this->db->query($sql);
        return $resultado;
    }

    public function __construct($nickname, $password, $conexion) {
        $this->nickname = $nickname;
        $this->password = $password;
        $this->conexion = $conexion;
    }

    public function verificarCredenciales() {
        // Obtener el nombre de usuario y contraseña ingresados
        $nombreUsuario = $this->nickname;
        $contrasena = $this->password;

        // Realizar la verificación de credenciales en la base de datos
        $query = "SELECT * FROM usuarios WHERE nombre_usuario = :nombreUsuario AND contrasena = :contrasena";
        $statement = $this->conexion->prepare($query);
        $statement->bindParam(':nombreUsuario', $nombreUsuario);
        $statement->bindParam(':contrasena', $contrasena);
        $statement->execute();

        // Verificar si se encontraron registros coincidentes
        $resultado = $statement->fetch();

        if ($resultado) {
            // Credenciales válidas
            return true;
        } else {
            // Credenciales inválidas
            return false;
        }
    }   
}
?>