<?php
   /* if(isset($_GET['idLibro'])){
        $_SESSION['libro'] = $_GET['idLibro']; 
     }*/
echo "aca llego antes ";

include_once("../models/Libro.php");
echo "aca llego ";
$libro = new Libro();
echo "aca llego 2 ";
$libro->infoLibro ($_SESSION['idLibro']);
echo "aca llego 3 ";


?>