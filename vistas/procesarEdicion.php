<?php

include("../controller/editarLibroController.php");

$id =$_POST['id'];
$Titulo = $_POST['titulo'];
$Editorial = $_POST['editorial'];
$Isbn = $_POST['isbn'];
$Autor = $_POST['autor'];
$Descripcion = $_POST['descripcion'];

$libro->editarLibro($Titulo, $Editorial, $Isbn, $Autor, $Descripcion, $id);

