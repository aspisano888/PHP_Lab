<?php
    class Libro {
        private $dbh;
        private $libro;
        
        public function __construct() {
            $this->libro = array();
            $this->dbh = new PDO('mysql:host=localhost;dbname=php_labdb', "root", "");
        }

        private function set_names() {
            return $this->dbh->query("SET NAMES 'latin1'");
        }
        
        public function listarLibros () { 
            $lib = "SELECT * FROM libro";

            self::set_names();
            foreach ($this->dbh->query($lib) as $res){
                $this->libro[]=$res;
            }
            return $this->libro;
            $this->dbh=null;

        }

        public function infoLibro (int $id) { 
            $lib = "SELECT * FROM libro WHERE id='$id'";

            self::set_names();
            foreach ($this->dbh->query($lib) as $res){
                $this->libro[]=$res;
            }
            return $this->libro;
            $this->dbh=null;
        }

        public function editarLibro ($Titulo, $Editorial, $Isbn, $Autor, $Descripcion, $id){
            try { 
                $this->dbh->query("UPDATE libro SET titulo='$Titulo', editorial='$Editorial', isbn='$Isbn', autor='$Autor', descripcion='$Descripcion' WHERE id='$id'");
                
            } catch (mysqli_sql_exception $e) { 
               var_dump($e);
               exit; 
            } 
        }

        public function eliminarLibro ($id){
            $this->dbh->query("DELETE FROM libro WHERE id='$id'");     
         }

        
    }
    
    
    ?>