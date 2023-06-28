<?php
require_once("./models/Libro.php");
$libro = new Libro();
$pd = $libro->listarLibros();
//include_once("./vistas/eliminarModificarLibro.php");
