<?php
include_once("../vistas/edicion.php");

$id =$_POST['id'];
$Titulo = $_POST['titulo'];
$Editorial = $_POST['editorial'];
$Isbn = $_POST['isbn'];
$Autor = $_POST['autor'];
$Descripcion = $_POST['descripcion'];

require_once("../models/Libro.php");
$libro = new Libro();
$pd = $libro->editarLibro($Titulo, $Editorial, $Isbn, $Autor, $Descripcion, $id);

if ($pd) {
    echo "<script>alert('Libro actualizado exitosamente'); 
    window.location='/codigos/PHP_Lab/vistas/listadoLibros.php'</script>";
} else {
    echo "<script>alert('Error al procesar los datos');window.history.go(-1);</script>";
}
?>