<?php
include_once 'registro.php';
include_once 'sessiones.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo 'hay una session';   
}else if(isset($_POST['user']) && isset($_POST['password'])){
    //Validamos formulario cuando tenemos datos
    $userForm = $_POST['user'];
    $userPass = $_POST['password'];
    
    if($user->userExist($userForm, $userPass)){
        echo 'usuario si existe';
    }else{
        echo 'nombre o contraseña incorrectos';
    }
}else{
    // Mandar a vista de iniciar sesion
    include_once 'index.html';
}


?>