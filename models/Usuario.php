<?php
    class Usuario {
        public $id;
        public $nombre;
        public $apellido;
        public $cedula;
        public $telefono;
        public $contrasena;


        function set_nombre($nombre){ 
            $this->nombre=$nombre; 
        } 
        
        
        function set_apellido($apellido){ 
            $this->apellido=$apellido; 
        } 
        
        
        function set_cedula($cedula){ 
            $this->cedula=$cedula; 
        } 
        
        
        function set_telefono($telefono){ 
            $this->telefono=$telefono; 
        } 
        
        function set_contrasena($contrasena){ 
            $this->contrasena=$contrasena; 
        } 

        function get_nombre(){ 
            return $this->nombre; 
        }

        function get_apellido(){ 
            return $this->apellido; 
        }
        
        function get_cedula(){ 
            return $this->cedula; 
        }
        
        function get_telefono(){ 
            return $this->telefono; 
        }
        
        function get_contrasena(){ 
            return $this->contrasena; 
        }
        
    }
    
    
    ?>