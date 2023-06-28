<?php

require_once("./models/Libro.php");
$libro = new Libro();
if ($_SESSION['tipo'] == 'administrador'){
    $pd = $libro->listarLibros();
} else {
    $pd = $libro->listarLibrosSocio($_SESSION['id']);
}
?>
