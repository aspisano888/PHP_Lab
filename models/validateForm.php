<?php


include("./models/Conex.php"); 
$conex = Conectarse();
$usuarios = "SELECT * FROM usuario";


    if (isset($_POST['submit'])){
        if (empty($nickname) or empty($password)){
            echo "<p class='error'> * Campo obligatorio </p>";
        } else {
            $resultado=mysqli_query($conex, $usuarios);
            while($row= mysqli_fetch_assoc($resultado)){	
                if ($row["nombre"] = $nickname and $row["contraseña"] = $password){
                    return true;
                } else {
                    echo "<p class='error'> * Nombre o Çontraseña erroneos </p>";
                    return false;
                }
                		
            }
        }
        mysqli_free_result($resultado);
    }
?>