
<?php
include_once './controller/Config.php';
include_once './controller/ConexBD.php';

session_start();
if (isset($_SESSION) && isset($_GET['view'])) {

    switch ($_GET['view']) {
        case 'listarLibros':
            include_once './controller/listarLibController.php';
            if($_SESSION['tipo']=="administrador"){
                $vista = "listadoLibros";
            }else{
                $vista = "listarPrestamos";
            }
            break;
        case 'procesarAgregado':
                include_once './controller/addBookController.php';
                $vista = "listadoLibros";
                break;
        case 'agregarLibro':
            include_once './controller/nuevoLibroController.php';
            $vista = "addBook";
            break;
        case 'prestarLibro':
                $_SESSION['idLibro']= $_GET['id'];
                $_SESSION['titulo']= $_GET['titulo'];
                include_once './controller/prestarLibroSocioController.php';
				$vista = "listarPrestamos";
				break;
        case 'eliminarLibro':
            include_once './controller/eliminarModificarController.php';
			
            $vista = "eliminarModificarLibro";
            break;
        case 'descripcionLibro':
            $id= $_GET['id'];
            include_once "./controller/descripcionLibroController.php";
            $vista = "descripcionLibro";
            break;
        case 'procesarEliminado':
           // include_once "./controller/eliminarLibroController.php";
            include_once '../controller/listarLibroController.php';
            $vista = "listadoLibros";
            break;
        case 'homeAdmin':
            include_once './models/Libro.php';
            $vista = "homeAdmin";
            break;   
        case 'homeSocio':
            include_once './models/Libro.php';
			include_once './controller/prestarLibroSocioController.php';
            $vista = "homeSocio";
            break;         
        case 'signout':
            unset($_SESSION);
            session_destroy();
            session_start();
            $vista = "login";
            break;
    } 
}else {
        $vista = "login";
        if (isset($_POST['nickname']) && isset($_POST['password'])) {
        include_once './models/Login.php';

        $dbConexion = DbConexion::getInstancia();
        $db = $dbConexion->getConexion();

        $usr = $_POST['nickname'];
        $pas = $_POST['password'];

        $inicioSesion = new Login($db, $usr, $pas);

        if ($inicioSesion->existeUsuario()) {
            $res = $inicioSesion->iniciarSesion();
            if($res){ //(count($res) === 1) {
                foreach ($res as $fila) {
                    if($_POST['nickname'] == $fila['nombre']){
                    $_SESSION['id'] = $fila['id'];
                    $_SESSION['tipo'] = $fila['tipo'];
                    }
                }
                if ($_SESSION['tipo'] == 'socio') {
                    $_SESSION['home'] = "homeSocio";
                    $vista = "homeSocio";
                }else{
                    $_SESSION['home'] = "homeAdmin";
                    $vista = "homeAdmin";
                }                         
                include_once './models/Libro.php';
                include_once './models/Prestamo.php';
            } else {
                $_GET['error'] = "<div class='alert alert-danger' role='alert'>Password incorrecto.</div>";
            }
        }       
    }
}


include_once ("./vistas/$vista.php");


?>
