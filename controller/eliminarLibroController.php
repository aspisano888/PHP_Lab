<?php

$id = $_GET["id"];
require_once("./models/Libro.php");
$libro = new Libro();
$pd2 = $libro->infoLibro($id);
$libro->eliminarLibro($id);
$pd = $libro->listarLibros();


?>