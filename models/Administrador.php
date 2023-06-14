<?php
    include("Usuario.php");


    class Administrador extends Usuario{



        function newAdmin ($nombre, $apellido, $cedula, $telefono, $contrasena, $tipoUsuario) {
            parent::newUsuario($nombre, $apellido, $cedula, $telefono, $contrasena, $tipoUsuario);
        }


        function nuevoUsuario () {

        }

        function agregarLibro () {
            
        }

        function listarLibrosEnPrestamo () {

        }

        function listarLibrosPorEstado () {

        }

        function eliminarLibro () {

        }

        function modificarLibro () {

        }

        function librosPlazoVencido () {

        }

        function listarSocios () {

        }
      
    }
    
    
    ?>