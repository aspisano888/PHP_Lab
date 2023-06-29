<?php
//$id = $_GET["id"];
require_once("./models/Prestamo.php");
$prestamo = new Prestamo($_SESSION['id'],$_SESSION['idLibro']);
if($prestamo->verificarPrestamos()){
    $listaPrestamo = $prestamo->listarLibrosSocio();
    $_SESSION['error'] = "DENEGADO"; 
    //require_once("../index.php?view=prestarLibroSocio");
}else{
    $prestamo->prestarLibroSocio();
    $listaPrestamo = $prestamo->listarLibrosSocio();
    
}
?>