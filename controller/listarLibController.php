<?php

require_once("./models/Libro.php");
if ($_SESSION['tipo'] == 'administrador'){
    $libro = new Libro();
    $pd = $libro->listarLibros();
} else {
require_once("./models/Prestamo.php");
    $prestamo = new Prestamo($_SESSION['id'],$_SESSION['idLibro']);

    $listaPrestamo = $prestamo->listarLibrosSocio();
}
?>
