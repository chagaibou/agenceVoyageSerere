<?php 
function db() : PDO{
    static $pdo = null;
    if ($pdo instanceof PDO) return $pdo;

    $host = "localhost";
    $name ="agence_voyage";
    $user = "root";
    $pass ='';

    $dsn = "mysql:host={$host};dbname={$name};charset=utf8mb4";


    try{
        $pdo = new PDO($dsn,$user,$pass);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
     }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $pdo;

}


?>