<?php

require_once __DIR__."/Connection.php";

try{
    $connection = getConnection();
    #$username = "admin";
    #$password = "admin";
    #$sql = "SELECT * FROM admin WHERE username = 'admin' AND password = 'admin'";

    # contoh query SQL injection
    //$username = "admin';#";
    //$password = "12343414";

    #$injectionsql = "SELECT * FROM admin WHERE username = 'admin'; #' AND password = '$password'";
    // ... 'admin'; #' AND password = '$password'"; -> perintah selanjutnya (setelah admin) akan dianggap komentar karena ada (#)
    // jadi user bisa login tanpa password

    // kalo seandainya ada parameter input dari user, seperti query dibawah
    // $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

    // $result = $connection->query($sql); jgn pake query dan exec atau execure jika ada parameter input dari user
    // pake prepare(sql) supaya aman dari injection

    // solusi pake prepare
    // buat dulu query nya
    // query sql nya agak sedikit berubah
    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $result = $connection->prepare($sql);

    // abis itu masukin parameter yg ada di query nya

    // sql injection -> error, invalid
    // $username = "admin';#";
    // $password = "12791724917";

    // berhasil
    $username = "admin";
    $password = "admin";

    $result->execute([$username, $password]);

    // ribet
    // $success = false;
    // $find_user = null;
    // foreach ($result as $row) {
    //     $success = true;
    //     $find_user = $row['username'];
    // }

    // if ($success) {
    //     echo "Welcome $find_user" .PHP_EOL;
    // } else {
    //     echo "Invalid username or password" .PHP_EOL;
    // }

    // pake fetch aja
    if ($row = $result->fetch()){
        echo "Welcome " . $row['username'] . PHP_EOL;
    } else {
        echo "Invalid username or password" .PHP_EOL;
    }

} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
} finally {
    $connection = null;
}