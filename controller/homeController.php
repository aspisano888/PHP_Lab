<?php

require_once("../models/Libro.php");
require_once("../models/Categoria.php");

$libro = new Libro();
$pd = $libro->listarLibros();

$categoria = new Categoria();
$cat = $categoria->listarCategorias();
require_once("../vistas/home.php");

?>
