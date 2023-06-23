<?php
    class User {
        private $db;
        private $users;

        public function __construct(){
            $this->db = Conexion::conectar();
            $this->users = array();
        }

        public function validarUsuario($nickname,$clave){
            $this->db = Conexion::conectar();
            $sql = "SELECT * FROM usuario WHERE nombre='$nickname' AND password='$clave'";
            $resultado = $this->db->query($sql);
            if(!empty($resultado)){
                return true;
            }else{
                return false;
            }
        }

        public function getTipo($nickname,$clave){
            $this->db = Conexion::conectar();
            $sql = "SELECT tipo FROM usuario WHERE nombre='$nickname' AND password='$clave'";
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
}
?>

