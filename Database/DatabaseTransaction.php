<?php

/*
kita bisa buat id yang auto increment dengan auto_increment di mysql
trus kita bisa mengambil id terkahir yg di insert dengan menggunakan query select last_insert_id()
di pdo kita bisa menggunakan function lastInsertId() -> untuk mengambil id terakhir yg di insert via auto increment
*/

require_once __DIR__."/Connection.php";

try{

    $connection = getConnection();

    // Transaction
    // beginTransaction() -> untuk memulai transaksi
    // commit() -> untuk menyimpan transaksi
    // rollback() -> untuk membatalkan transaksi

    $connection->beginTransaction(); // karena PDO otomatis commit, maka beginTransaction() ketika dijalankan akan
                                     // Menunda commit selama transaksi belum selesai
    $connection->exec("INSERT INTO comments (email, comment) VALUES ('test5@mail.com', 'test131')");
    $connection->exec("INSERT INTO comments (email, comment) VALUES ('test6@mail.com', 'test415')");
    $connection->exec("INSERT INTO comments (email, comment) VALUES ('test7@mail.com', 'test161')");
    $connection->exec("INSERT INTO comments (email, comment) VALUES ('test8@mail.com', 'test718')");
    $connection->exec("INSERT INTO comments (email, comment) VALUES ('test9@mail.com', 'test192')");

    // $connection->commit(); echo "Data berhasil"; // kalo ada salah satu query yg salah maka akan dibatalkan

    // rollback juga bisa digunakan untuk membatalkan transaksi
    $connection->rollback(); echo "Data gagal";

    // kemudian jika data gagal di commit, atau melakukan rollback, maka id auto increment yg di insert akan tetap di insert
    // sehingga jika kita insert data lagi, kemudian commit, maka id yg masuk ke database akan melanjutkan dari id terakhir
    // yg di insert di data yang rollback atau gagal commit

    /*
    contoh:

    kita insert data comment dengan id terakhir 31 lalu gagal
    ketika insert data comment lagi lalu sukses, maka id nya akan berubah menjadi 33,
    karena 1 data gagal di insert jadi si auto_increment ini akan melanjutkan increment dari
    data yang sudah di insert
    */


} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
} finally {
    $connection = null;
}