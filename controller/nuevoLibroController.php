<?php

require_once("./models/Categoria.php");
$categoria = new Categoria();
$cat = $categoria->listarCategorias();


?>