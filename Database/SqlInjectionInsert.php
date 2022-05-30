<?php

require_once __DIR__."/Connection.php";

try{
    $connection = getConnection();

    $sql = "INSERT INTO admin (username, password) VALUES (?,?)";
    $result = $connection->prepare($sql);

    $username = "newadmin";
    $password = "rahasia";

    $result->execute([$username, $password]);

} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
} finally {
    $connection = null;
}

echo "Success created user: $username";