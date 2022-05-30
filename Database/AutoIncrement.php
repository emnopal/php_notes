<?php

/*
kita bisa buat id yang auto increment dengan auto_increment di mysql
trus kita bisa mengambil id terkahir yg di insert dengan menggunakan query select last_insert_id()
di pdo kita bisa menggunakan function lastInsertId() -> untuk mengambil id terakhir yg di insert via auto increment
*/

require_once __DIR__."/Connection.php";

try{

    $connection = getConnection();

    $sql = <<<SQL
            INSERT INTO
                comments (email, comment)
            VALUES
                ('Agus', 'Hi'),
                ('Budi', 'Hi Nama'),
                ('Caca', 'Hi Nama Saya'),
                ('Joko', 'Hi Nama Saya Joko')
        SQL;

    // pake prepare
    // $result = $connection->prepare($sql);
    // $result->execute();

    // Pake exec statement
    $connection->exec($sql);

    // get last insert id
    $ids = $connection->lastInsertId();

    echo "Last Insert Id : ".$ids .PHP_EOL;

} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
} finally {
    $connection = null;
}