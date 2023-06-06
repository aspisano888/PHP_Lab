<?php
    class Libro {
        public $id;
        public $titulo;
        public $editorial;
        public $isbn;
        public $autor;
        public $categoria;
        public $estado;


        //setters

        function set_titulo($titulo){ 
            $this->titulo=$titulo; 
        } 
              
        function set_editorial($editorial){ 
            $this->editorial=$editorial; 
        } 
               
        function set_isbn($isbn){ 
            $this->isbn=$isbn; 
        } 
                
        function set_categoria($categoria){ 
            $this->categoria=$categoria; 
        } 
        
        function set_autor($autor){ 
            $this->autor=$autor; 
        } 


        //getters


        function get_titulo(){ 
            return $this->titulo; 
        }

        function get_editorial(){ 
            return $this->editorial; 
        }
        
        function get_isbn(){ 
            return $this->isbn; 
        }
        
        function get_autor(){ 
            return $this->autor; 
        }
        
        function get_categoria(){ 
            return $this->categoria; 
        }
        
    }
    
    
    ?>