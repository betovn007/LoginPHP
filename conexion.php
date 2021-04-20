<?php

class Conexion{
//     private $host = "localhost";
//     private $user = "root";
//     private $password = "";
//     private $db = 'registrousuarios';
//     private $conect;

//     public function __construct(){
//         $connectionString = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
//         try{
//             $this->conect = new PDO($connectionString, $this->user,$this->password);
//             $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             echo "Conexion exitosa";
//         }catch(Exception $e){
//             $this->conect = 'Error de conexion';
//             echo "ERROR: ".$e->getMessage();
//         }
//     }
// }
// $conect = new Conexion();

    private $host;
    private $user;
    private $password;
    private $db;

    public function __construct(){

        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->db = 'registrousuarios';
    }

    function connect(){
        try{
            $connectionString = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";

            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $pdo = new PDO($connectionString, $this->user,$this->password, $options);
            echo "Conexion exitosa";
            return $pdo;    

        }catch(PDOException $e){
            echo "Hay algo mal en la conexion a la base";
            print_r("Error connection: " . $e->getMessage());
        }
    }
}
?>