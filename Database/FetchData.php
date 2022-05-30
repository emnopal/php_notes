<?php

require_once __DIR__."/Connection.php";

try{
    // fetch data
    // fetch() akan return sebagai iterator, berguna untuk mengambil satu data dari database
    // jadi fetch akan melakukan iterasi ke semua data yang ada di database dengan fetch()
    // ketika iterasi sudah sampai terakhir, fetch akan return false, artinya datanya abis

    // jika ingin mengambil semua data, maka gunakan fetchAll()
    $connection = getConnection();

    // bisa pake ini
    $sql = "SELECT * FROM admin";
    $result = $connection->prepare($sql);
    $result->execute();

    // atau ini
    $sql2 = "SELECT * FROM customers";
    $result2->exec($sql2);

    // daripada ribet pake foreach, mending pake fetch kalo mau ambil data satu row aja
    if ($row = $result->fetch()) {
        echo "Success: " .$row["username"] .PHP_EOL;
    }
    else {
        echo "Failed" .PHP_EOL;
    }

    // kalo mau ambil data sekaligus
    var_dump($result2->fetchAll());

} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
} finally {
    $connection = null;
}