<?php
function listarLibros(){
    require_once("../models/Administrador.php");
	$biblioteca = new Administrador();
	$pd = $biblioteca->listarLibros();
	require_once("./index.php");
}


?>
