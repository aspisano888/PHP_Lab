<?php
    include("Usuario.php");


    class Administrador extends Usuario{

        private $libros;
        private $db;

        function newAdmin ($nombre, $apellido, $cedula, $telefono, $contrasena, $tipoUsuario) {
            parent::newUsuario($nombre, $apellido, $cedula, $telefono, $contrasena, $tipoUsuario);
            $this->db = new PDO('mysql:host=localhost;dbname=php_labdb', "root", "");
            $this->libros = array();
        }
        private function set_names()
        {
            return $this->db->query("SET NAMES 'utf8'");
        }

        function listarLibros() {
            self::set_names();
            $sql="SELECT * FROM libro";
            foreach ($this->db->query($sql) as $res)
            {
                $this->libros[]=$res;
            }
            return $this->libros;
            $this->db=null;
        }

        function nuevoUsuario () {

        }

        function agregarLibro () {
            
        }

        function listarLibrosEnPrestamo () {

        }

        function listarLibrosPorEstado () {

        }

        function eliminarLibro () {

        }

        function modificarLibro () {

        }

        function librosPlazoVencido () {

        }

        function listarSocios () {

        }
      
    }
    
    ?>