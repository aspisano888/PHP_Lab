<?php

class ControllerBook{

    public function homeSocio(){
        require_once "../models/Book.php";
        $books = new Book();
        $data["titulo"] = "SeaBook";
        $data["libros"] = $books->getBooks();
        require_once "../views/homeSocio.php";
    }

    public function homeAdmin(){
        require_once "../models/Book.php";
        $books = new Book();
        $data["titulo"] = "SeaBook";
        $data["libros"] = $books->getBooks();
        require_once "../views/homeAdmin.php";
    }
} 

?>