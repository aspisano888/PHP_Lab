<?php
    class Book {
        private $db;
        private $books;

        public function __construct(){
            $this->db = Conexion::conectar();
            $this->books = array();
        }

        public function getBooks(){
            $sql = "SELECT * FROM libro";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()){
                $this->books[] = $row;
            }
            return $this->books;
        }

    }
    
    
?>