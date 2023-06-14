<?php
    include("Usuario.php")

    class Socio extends Usuario{



        function newSocio ($nombre, $apellido, $cedula, $telefono, $contrasena, $tipoUsuario) {
            parent::newUsuario($nombre, $apellido, $cedula, $telefono, $contrasena, $tipoUsuario);
        }

        function solicitarLibro () {

        }

        function devolverLibro () {

        }

        function listarLibrosPedidos () {

        }

        function listarLibrosPorEstado () {

        }

        function historialLibros () {
            
        }


        
    }
    
    
    ?>