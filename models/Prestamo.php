<?php


    class Prestamo {
        private $dbh;
        private $socioId;
        private $libroId;
        private $fechaPrestamo;

    
        //constructor
        public function __construct($socioId, $libroId) {
            $this->libroId = array();
            $this->dbh = new PDO('mysql:host=localhost;dbname=php_labdb', "root", "");
            $this->socioId = $socioId;
            $this->libroId = $libroId;
        }

        private function set_names() {
            return $this->dbh->query("SET NAMES 'latin1'");
        }

        public function verificarPrestamos(){
            $prestado = false;
            $sql = "SELECT * FROM prestamo WHERE idLibro='$this->libroId' AND idUsuario= '$this->socioId'";
            $statement = $this->dbh->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            if (count($result) > 0) $prestado = true;
            return $prestado;
        }

        public function prestarLibroSocio(){
            $this->fechaPrestamo = date("Y-m-d");
            $this->dbh->query("INSERT INTO prestamo (idLibro,idUsuario,fechaPrestamo)VALUES ('$this->libroId', '$this->socioId', '$this->fechaPrestamo')");
        }
    }
?>