<?php

class Connect{
    static public function conect(){
        $host = 'localhost';
        $db   = 'portfolio';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4'; //resolve problem ecriteur
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $pdo = new PDO($dsn, $user, $pass);
        // $db = new PDO ($host , );
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);  
        return $pdo;
        
    }

}   


?>