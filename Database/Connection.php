<?php

function getConnection(): PDO {

    $host = "localhost";
    $port = "3306";
    $user = "root";
    $database = "learnphp";
    $password = "Bodoamat212";

    try{
        $conn = new PDO("mysql:host=$host:$port;dbname=$database", $user, $password);
        echo "Connected successfully" .PHP_EOL;
    } catch(PDOException $e){ // exception disini adalah PDOException
        echo "Connection failed: " . $e->getMessage() . PHP_EOL;
    }

    return $conn;
}
