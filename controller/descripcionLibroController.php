<?php

$id = $_GET["id"];
require_once("../models/Libro.php");
$libro = new Libro();
$pd = $libro->infoLibro($id);
require_once("../vistas/descripcionLibro.php");

?>