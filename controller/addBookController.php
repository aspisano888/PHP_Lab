<?php

$Titulo = $_POST['titulo'];
$Editorial = $_POST['editorial'];
$Isbn = $_POST['isbn'];
$Autor = $_POST['autor'];
$Descripcion = $_POST['descripcion'];
if (!empty($_POST['category']) || !empty($_POST['imagen'])){
    $Category = $_POST['category'];
    $Imagen = $_POST['imagen'];
    require_once("./models/Libro.php");
    $libro = new Libro();
    $pd = $libro->agregarLibro($Titulo, $Editorial, $Isbn, $Autor, $Imagen, $Descripcion, $Category);
} else {
    
}    




?>