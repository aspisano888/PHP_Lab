<?php
//$id = $_GET["id"];
require_once("../models/Prestamo.php");
$_SESSION['error'];
$prestamo = new Prestamo($_SESSION['id'],$_SESSION['libro']);
if($prestamo->verificarPrestamos()){
    $_SESSION['error'] = "DENEGADO"; 
    //require_once("../index.php?view=prestarLibroSocio");
}else{
    $prestamo->prestarLibroSocio();
    $_SESSION['error'] = "PRESTADO"; 
    //require_once("../index.php?view=listarLibros");
    
}
?>