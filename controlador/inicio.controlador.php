<?php

class InicioControlador{
    private $modelo;

    public function __construct(){
        //$this->modelo=new Producto();
    }

    public function Inicio(){
        $bd = BasedeDatos::Conectar();
        require_once "vistas/home.php";

    }
}

?>
