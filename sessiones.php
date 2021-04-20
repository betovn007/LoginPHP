<?php

class UserSession{
    public function __construct()
    {
        session_start();
    }

    public function setUserActual($user){
        $_SESSION['user'] = $user; //nombre de la sesion
    }

    public function getUserActual(){
        return $_SESSION['user'];
    }

    public function closeSession()
    {
        session_unset();
        session_destroy();
    }
}


?>