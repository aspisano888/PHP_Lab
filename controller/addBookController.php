<?php



$Titulo = $_POST['titulo'];
$Editorial = $_POST['editorial'];
$Isbn = $_POST['isbn'];
$Autor = $_POST['autor'];
$Imagen = $_POST['imagen'];

$Descripcion = $_POST['descripcion'];
$Category = $_POST['category'];

require_once("./models/Libro.php");
$libro = new Libro();
$pd = $libro->agregarLibro($Titulo, $Editorial, $Isbn, $Autor, $Imagen, $Descripcion, $Category );
if($pd){
    echo "<script>alert('Libro agregado correctamente');
    window.location='/codigos/PHP_LAB/index.php?view=listarLibros.php'</script>;";
}   else {
    echo "<script>alert('Error al procesar los datos');window.history.go(-1);</script>";
}

?>