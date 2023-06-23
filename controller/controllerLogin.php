<?php
    require_once("../index.php");
    include '../models/User.php';
    
    if (empty($_POST['nickname']) || empty($_POST['password'])) {
         $nombre = $_POST['nickname'];
         $clave = $_POST['password'];
         $user = new User;

         if ($user->validarUsuario($nombre,$clave)) {
            $tipo = $user->getTipo($nombre,$clave);
             if ($tipo == "administrador") {
                 require_once("views/homeAdmin.php");
             } else {
                require_once("views/homeSocio.php");
             }
         } else {
             $existe['error'] = "El usuario no existe";
             print_r($existe);
         }
    }else{
        $error['mensaje'] = "El nickname o la contraseña no pueden estar vacios";
        print_r($error);
    }
?>