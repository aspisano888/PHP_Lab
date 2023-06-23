<?php
    class User {
        private $db;
        private $users;

        public function __construct(){
            $this->db = Conexion::conectar();
            $this->users = array();
        }

        public function getTipo($nickname,$password){
            $sql = "SELECT tipo password FROM usuario WHERE nombre='$nickname' AND password='$password'";
            $resultado = $this->db->query($sql);
            return $resultado;
        }
        public function getUsers(){
            $this->db = Conexion::conectar();
            $sql = "SELECT * FROM usuario";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()){
                $this->users[] = $row;
            }
            return $this->users;
        }
        
        // public function verificarCredenciales($nombre, $password){
        //     $sql = "SELECT * FROM usuarios WHERE nombre = '" . $nombre . "' AND password = '" . $password . "'";
        //     $resultado = $this->db->query($sql);
        //     if($row = $resultado->fetch_object()){
        //         return $row;
        //     }else{
        //         return  echo 'usuario no encontrado';
        //     }

        // }



    public function verificarCredenciales($nickname, $password) {
        // Obtener el nombre de usuario y contraseña ingresados
        $nombreUsuario = $nickname;
        $contrasena = $password;
       
        $this->db = Conexion::conectar();
        $sql = "SELECT * FROM usuarios WHERE nombre_usuario = :nombreUsuario AND contrasena = :contrasena";
        $resultado = $this->db->query($sql);
        // Realizar la verificación de credenciales en la base de datos
        $statement = $this->db->prepare($resultado);
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

