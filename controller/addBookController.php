<?php

require_once("../models/Categoria.php");
$categoria = new Categoria();
$cat = $categoria->listarCategorias();
include_once("../vistas/addBook.php");

$Titulo = $_POST['titulo'];
$Editorial = $_POST['editorial'];
$Isbn = $_POST['isbn'];
$Autor = $_POST['autor'];
$Imagen = $_POST['imagen'];
$Descripcion = $_POST['descripcion'];
$Category = $_POST['category'];

require_once("../models/Libro.php");
$libro = new Libro();
$pd = $libro->agregarLibro($Titulo, $Editorial, $Isbn, $Autor, $Imagen, $Descripcion, $Category );
require_once("../vistas/listadoLibros.php");

?>