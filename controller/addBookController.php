<?php
include_once("./models/Conex.php");

$Titulo = $_POST['titulo'];
$Editorial = $_POST['editorial'];
$Isbn = $_POST['isbn'];
$Autor = $_POST['autor'];
$Descripcion = $_POST['descripcion'];
$Category = $_POST['category'];
$Imagen = $_POST['imagen'];

require_once("./models/Libro.php");
$libro = new Libro();
$pd = $libro->agregarLibro($Titulo, $Editorial, $Isbn, $Autor, $Imagen, $Descripcion, $Category);
if($pd){
    echo "<script>alert('Libro agregado correctamente');
    window.history.go(-1)</script>;";
} else {
    echo "<script>alert('Error al procesar los datos');window.history.go(-1);</script>";
}    




?>