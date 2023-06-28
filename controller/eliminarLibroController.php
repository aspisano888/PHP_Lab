<?php

require_once("../models/Libro.php");
$id = $_GET["id"];
$libro = new Libro();
$pd2 = $libro->infoLibro($id);
$libro->eliminarLibro($id);
$pd = $libro->listarLibros();
require_once("../index.php?view=listadoLibros");

?>