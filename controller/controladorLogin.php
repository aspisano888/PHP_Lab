<?php
/*
require_once("./login.php");

       if (empty($_POST['nickname']) || empty($_POST['password'])) {
            $usuario = $_POST['nickname'];
            $clave = $_POST['password'];
            $data = $this->model->selectUsuario($usuario, $clave);
            if (!empty($data)) {
                if (password_verify($clave, $data['password'])) {
                    require_once("vistas/home.php");
                 
                    /*   $_SESSION['id'] = $data['id'];
                    $_SESSION['nombre'] = $data['nombre'];
                    $_SESSION['usuario'] = $data['usuario'];
                    $_SESSION['correo'] = $data['correo'];
                    $_SESSION['rol'] = $data['rol'];
                    $_SESSION['activo'] = true;
                    header("location: Productos/Listar");*/
             //   } else {
          //          $data['error'] = "Las Contraseñas no coinciden";
        //            print_r($data);
                    //$this->views->getView($this, "home", $data);
        //        }
        //    } else {
        //        $data['error'] = "El usuario no existe";
        //        print_r($data);
                //$this->views->getView($this, "home");
       //     }
 //      }


    ?>