<?php
   /* if(isset($_GET['idLibro'])){
        $_SESSION['libro'] = $_GET['idLibro']; 
     }*/
$id = $_GET["id"];
require_once("./models/Libro.php");
$libro = new Libro();
$pd = $libro->infoLibro($id);
require_once("./vistas/descripcionLibro.php");


?>