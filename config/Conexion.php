<?php
class Conexion{

    public static function conectar() {
        $conexion = new mysqli('localhost', 'root', '', 'php_labdb');
        
        // Verificar si se produjo algún error al conectar
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }else{
            return $conexion;
        }
    }
} 
?>