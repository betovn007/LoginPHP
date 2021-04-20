<?php

include_once 'conexion.php';

class User extends Conexion{
    // private $user;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    
    public function userExist($user, $pass){
        //  $md5pass = md5($pass);

         $query = $this->connect()->prepare('SELECT * FROM login WHERE user = :usuario AND password = :pass');
         $query->execute(['usuario' => $user, 'pass' => $pass]);

         if($query->rowCount()){
             return true;
         }else{
             return false;
         }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM login WHERE user = :user');
        $query->execute(['user' => $user]);

        foreach($query as $userActual){
            $this->user = $userActual['user']; 
        }
    }

    public function getUser(){
        return $this->user;
    }
}



?>