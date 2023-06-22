<?php

class Categoria {
    private $dbh;
    private $categoria;

    public function __construct() {
        $this->categoria = array();
        $this->dbh = new PDO('mysql:host=localhost;dbname=php_labdb', "root", "");
    }

    private function set_names() {
        return $this->dbh->query("SET NAMES 'latin1'");
    }

    public function listarCategorias () { 
        $lib = "SELECT * FROM categoria";
       // $resultado=mysqli_query($conex, $libro);

        self::set_names();
        foreach ($this->dbh->query($lib) as $res){
            $this->categoria[]=$res;
        }
        return $this->categoria;
        $this->dbh=null;
    }
}
?>