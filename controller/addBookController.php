<?php

$targetDir = "images/";

$Titulo = $_POST['titulo'];
$Editorial = $_POST['editorial'];
$Isbn = $_POST['isbn'];
$Autor = $_POST['autor'];
$Descripcion = $_POST['descripcion'];
$Category = $_POST['category'];
//$Imagen = $_POST['imagen'];

    $fileName = $_FILES['imagen']['name'];
    $tmp_name = $_FILES['imagen']['tmp_name'];
    $folder = "./images/" . $fileName;
    move_uploaded_file($tmp_name,$folder);
    
require_once("./models/Libro.php");
$libro = new Libro();
$pd = $libro->agregarLibro($Titulo, $Editorial, $Isbn, $Autor, $folder, $Descripcion, $Category );
if($pd){
    echo "<script>alert('Libro agregado correctamente');
    window.location='/codigos/PHP_LAB/index.php?view=listarLibros.php'</script>;";
} else {
    echo "<script>alert('Error al procesar los datos');window.history.go(-1);</script>";
}    




?>