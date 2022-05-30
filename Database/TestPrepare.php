<?php

require_once __DIR__."/Connection.php";

try{

    // contoh jika tidak ada input dari user

    // rekomendasi jika mau menggunakan PDO gunakan parameter prepare dan execute saja
    $connection = getConnection();

    $sql = "SELECT * FROM admin";
    $result = $connection->prepare($sql);
    $result->execute();

    $success = false;
    foreach ($result as $row) {
        $success = true;
    }

    if ($success) {
        echo "Welcome" .PHP_EOL;
    } else {
        echo "Failed" .PHP_EOL;
    }

} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
} finally {
    $connection = null;
}