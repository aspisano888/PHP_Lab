<?php

/*
class Conexion {
	public static function Conectar () {
		define('servidor', 'localhost');
		define('dbname', 'php_labdb');
		define('usuario', 'root');
		define('password', '');

		$opciones = array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES latin1");

		try {
			$conexion = new PDO("mysql:host=".servidor."; dbname=".dbname, usuario, password, $opciones);
			return $conexion;
		} catch (Exception $e) {
			die("El error de conexion es: ".$e->getMessage());
		}
	}
}*/

	$conex = mysqli_connect("localhost", "root", "", "php_labdb");
	mysqli_set_charset($conex, "utf8");

function Conectarse() { 
	$dbhost= "localhost"; 
	$dbuser= "root"; 
	$dbpass= ""; 
	$dbname= "php_labdb"; 
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$link){
		echo 'Error en conexion a la base de datos';
	} else {
		return $link; 
	}
} 

?>