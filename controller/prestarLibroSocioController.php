<?php

require_once("./models/Prestamo.php");
$prestamo = new Prestamo($_SESSION['id'],$_SESSION['idLibro']);
if($prestamo->verificarPrestamos()){
    $listaPrestamo = $prestamo->listarLibrosSocio();
    $_SESSION['error'] = "DENEGADO"; 

}else{
    $prestamo->prestarLibroSocio();
    $listaPrestamo = $prestamo->listarLibrosSocio();
    
}
?>