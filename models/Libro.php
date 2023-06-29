<?php


    class Libro {
        private $dbh;
        private $libro;
        
        public function __construct() {
            $this->libro = array();
            $this->dbh = new PDO('mysql:host=localhost;dbname=php_labdb', "root", "");
        }

        public function set_names() {
            return $this->dbh->query("SET NAMES 'latin1'");
        }
        
        public function listarLibros () { 
            $lib = "SELECT * FROM libro";

            self::set_names();
            foreach ($this->dbh->query($lib) as $res){
                $this->libro[]=$res;
            }
            return $this->libro;
            //$this->dbh=null;

        }

        public function listarLibrosSocio ($id) { 
            $lib = "SELECT l.titulo, p.fechaPrestamo FROM libro as l JOIN prestamo as p WHERE p.idUsuario='$id' AND l.id = p.idLibro;";

            self::set_names();
            foreach ($this->dbh->query($lib) as $res){
                $this->libro[]=$res;
            }
            return $this->libro;
           // $this->dbh=null;
        }

        public function infoLibro ($id) { 
            $lib = "SELECT * FROM libro WHERE id='$id'";

            self::set_names();
            foreach ($this->dbh->query($lib) as $res){
                $this->libro[]=$res;
            }
            return $this->libro;
            //$this->dbh=null;
        }



        public function editarLibro ($Titulo, $Editorial, $Isbn, $Autor, $Descripcion, $id){
            try { 
                $this->dbh->query("UPDATE libro SET titulo='$Titulo', editorial='$Editorial', isbn='$Isbn', autor='$Autor', descripcion='$Descripcion' WHERE id='$id'");
                return true;
            } catch (mysqli_sql_exception $e) { 
               var_dump($e);
               exit; 
            } 
        }

        public function eliminarLibro ($id){
            $this->dbh->query("DELETE FROM libro WHERE id='$id'");     
         }

         public function agregarLibro ($Titulo, $Editorial, $Isbn, $Autor, $Imagen, $Descripcion, $Category){  
            try {  
            $this->dbh->query("INSERT INTO libro (titulo, editorial, isbn, autor, imagen, descripcion, idCategoria) VALUES  ('$Titulo', '$Editorial', '$Isbn', '$Autor', '$Imagen', '$Descripcion', '$Category')");     
            } catch (mysqli_sql_exception $e) { 
                var_dump($e);
                exit; 
            }
        }
        
    }
    
    
    ?>