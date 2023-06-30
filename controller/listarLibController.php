<?php

if ($_SESSION['tipo'] == 'administrador'){
    require_once("./models/Libro.php");
    $libro = new Libro();
    $pd = $libro->listarLibros();
} else {
    require_once("./models/Prestamo.php");
    $prestamo = new Prestamo($_SESSION['id'],$_SESSION['idLibro']);
    $listaPrestamo = $prestamo->listarLibrosSocio();
}
?>
