<?php
class BasedeDatos {
    const servidor = "localhost";
    const user = "root";
    const pass = "";
    const nombreBD = "php_labdb";

    public static function Conectar () {
        try {
            $conexion = new PDO("mysql:host=".self::servidor.";dbname=".self::nombreBD.";charset=utf8",self::user,self::pass);

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch (PDOException $e) {
            return "Falló".$e->getMessage();
        }
    }
}
?>