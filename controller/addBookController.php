<?php
include_once("./models/Conex.php");

$Titulo = $_POST['titulo'];
$Editorial = $_POST['editorial'];
$Isbn = $_POST['isbn'];
$Autor = $_POST['autor'];
$Descripcion = $_POST['descripcion'];
$Category = $_POST['category'];
//$Imagen = $_POST['imagen'];

$Imagen = $_FILES['imagen'];
$imageFileName = $Imagen['name'];
$imageFileTemp = $Imagen['tmp_name'];

$upload_image ='./images/'. $imageFileName;
move_uploaded_file($imageFileTemp, $upload_image);
/*
$sql = "INSERT INTO 'libro' ('titulo','editorial','isbn','autor','imagen','descripcion','idCategoria') VALUES  ('[$Titulo]','[$Editorial]','[$Isbn]','[$Autor]','[$upload_image]','[$Descripcion]','[$Category]')";

$result =mysqli_query($conex, $sql); 
*/

require_once("./models/Libro.php");
$libro = new Libro();
$pd = $libro->agregarLibro($Titulo, $Editorial, $Isbn, $Autor, $upload_image, $Descripcion, $Category );
if($result){
    echo "<script>alert('Libro agregado correctamente');
    window.location='/codigos/PHP_LAB/index.php?view=listarLibros.php'</script>;";
} else {
    echo "<script>alert('Error al procesar los datos');window.history.go(-1);</script>";
}    




?>