<?php
include_once './controller/Config.php';
include_once './controller/ConexBD.php';

session_start();

if (isset($_SESSION) && isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'listarLibros':
            // registrar libro
            $vista = "listadoLibros";
            include_once './models/Libro.php';
            //include_once './modelo/MLibro.php';
            break;
        case 'agregarLibro':
            // registrar usuario
            include_once './models/Libro.php';
           // include_once './modelo/MUsuario.php';
            $vista = "addBook";
            break;
        case 'eliminarLibro':
            // registrar autor
            include_once './modelo/Libro.php';
            $vista = "eliminarLibro";
            break;
        case 'modificarLibro':
            // registrar admin
            $vista = "edicion";
            include_once './modelo/Libro.php';
            break;
  /*      case 'gestionarPrestamo':
            // gestionar prestamo
            include_once './modelo/MBLibros.php';
            include_once './modelo/MPrestamo.php';
            $vista = "gestionarPrestamo";
            break;
        case 'gestionarDevolucion':
            // gestionar devolucion
            include_once './modelo/MBLibros.php';
            include_once './modelo/MPrestamo.php';
            $vista = "gestionarDevolucion";
            break;
        case 'buscarLibro':
            // buscar libro
            include_once './modelo/MBLibros.php';
            $vista = "buscarLibro";
            break;*/
        case 'salir':
            // cerrar sesion
            // $dbConeccion->cerrarSession();
            unset($_SESSION);
            session_destroy();
            session_start();
            $vista = "login";
            break;
        default:
            // sitio publico
            include_once './models/Libro.php';
           // include_once './modelo/MPrestamo.php';
            $vista = "home";
            break;
    }
} else {
    $vista = "login";
    if (isset($_POST['nombre']) && isset($_POST['password'])) {
        include_once './models/Login.php';

        $dbConexion = DbConexion::getInstancia();
        $db = $dbConexion->getConexion();

        $usr = $_POST['nombre'];
        $pas = $_POST['contraseña'];

        $inicioSesion = new MInicioSesion($db, $usr, $pas);

        if (!$inicioSesion->existeUsuario()) {
            $p = $inicioSesion->retornoHash();
            $_GET['error'] = "<div class='alert alert-danger' role='alert'>Usuario incorrecto: ".$p.".</div>";
        } else {
            $res = $inicioSesion->iniciarSesion($_POST['nombre'], $_POST['password']);
            if (count($res) === 1) {
                $_SESSION['home'] = true;
                $_SESSION['nombre'] = $res;
                $_SESSION['id'] = $res[0]['id'];
                //$_SESSION['idUsr'] = $res[0]['id'];
                $_SESSION['idUsr'] == null ? $_SESSION['tipo'] = 'admin' : $_SESSION['tipo'] = 'admin';
                $dbConexion->log("tipo de usuario: ".$_SESSION['tipo']);
                include_once './models/Libro.php';
                //include_once './modelo/MPrestamo.php';
                $vista = "home";
            } else {
                $_GET['error'] = "<div class='alert alert-danger' role='alert'>Password incorrecto.</div>";
            }
        }
    }
}
?>
<?php
if ($vista == "login") {
    include_once ("./vistas/$vista.php");
}else {
 //   include_once ("./vistas/tpl/header.php");
    include_once ("./vistas/$vista.php");
  //  include_once ("./vistas/tpl/footer.php");
}
?>
