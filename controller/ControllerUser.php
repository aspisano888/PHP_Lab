<?php

class ControllerUser{
    public function home(){
        require_once "../models/User.php";
        $users = new User();
        $data["titulo"] = "Usuarios";
        $data["usuarios"] = $users->getUsers();
        require_once "../views/home.php";
    }
} 

?>