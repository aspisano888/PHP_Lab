<?php

class controllerBook{

    function LoginUserController(){
        require '../views/index.php';

        $nickname = $_GET['nickname'];
        $password = $_GET['password'];
        
        $user = new User();
        $user = $user->verificarCredenciales($nickname, $password);
    // $query = "SELECT * FROM usuarios WHERE nombre = '" . $nickname . "' AND password = '" . $password . "'";
    // $resultado = $conexion->query($query);
        if ($existeUsuario) {
            $tipo = user($nickname, $password);
            // Obtén el tipo de usuario
            $filaUsuario = $resultado->fetch_assoc();
            $tipoUser = $filaUsuario['tipo'];
            // Consulta los libros
            $queryLibros = "SELECT * FROM libro";
            $resultadoLibros = $conexion->query($queryLibros);

            // Verificar si la consulta de libros fue exitosa
            if ($resultadoLibros) {
                $libros = [];
                while ($filaLibro = $resultadoLibros->fetch_assoc()) {
                    $libros[] = $filaLibro;
                }  
                if($tipoUser == "socio"){
                    require '../vistas/homeSocio.php';
                }else if ($tipoUser == "administrador"){
                    require '../vistas/homeAdmin.php';
                }else{
                echo "Error!: " . $nickname . " no existe en el sistema";
                }
            }else{
                echo "Error en la consulta: " . $conexion->error;
            }
        } else {
            echo "Credenciales inválidas. El usuario no puede iniciar sesión.";
            require '../index.php';
            
        }
}
}
?>


<?php

class Controller{
    public function home(){
        require_once "../view/index.php";
        $login = new Login();

        $data["titulo"] = "Usuarios";
        $data["usuarios"] = $users->getUsers();
        require_once "../views/home.php";
    }
} 

?>