<?php


    class Prestamo {
        public $id;
        public $usuarioId;
        public $libroId;
        public $bibliotecaId;
        public $fechaPrestamo;
    
        //constructor

        function newUsuario ($usuarioId, $libroId, $bibliotecaId, $fechaPrestamo) {
            $this->usuarioId=$usuarioId;
            $this->libroId=$libroId;
            $this->bibliotecaId=$bibliotecaId;
            $this->fechaPrestamo=$fechaPrestamo;
        }

        //setters

        function set_usuarioId($usuarioId){ 
            $this->usuarioId=$usuarioId; 
        } 
        
        
        function set_libroId($libroId){ 
            $this->libroId=$libroId; 
        } 
        
        
        function set_bibliotecaId($bibliotecaId){ 
            $this->bibliotecaId=$bibliotecaId; 
        } 
        
        
        function set_fechaPrestamo($fechaPrestamo){ 
            $this->fechaPrestamo=$fechaPrestamo; 
        } 

        //getters

        function get_libroId(){ 
            return $this->libroId; 
        }
        
        function get_bibliotecaId(){ 
            return $this->bibliotecaId; 
        }
        
        function get_fechaPrestamo(){ 
            return $this->fechaPrestamo; 
        }
        
        
        function destruct () {}

    }
    
    
?>