<?php

/*
    Not return results of database queries
*/

require_once __DIR__. "/Connection.php";

$connection = getConnection();

try{
    $sql = <<<SQL
        INSERT INTO customers (id, name, email)
        VALUES
        ("user1", "UserA", "UserA@mail.com"),
        ("user2", "UserB", "UserB@mail.com"),
        ("user3", "UserC", "UserC@mail.com"),
        ("user4", "UserD", "UserD@mail.com"),
        ("user5", "UserE", "UserE@mail.com")
    SQL; // multi line string in php

    $connection->exec($sql);
} catch (PDOException $e){
    echo $e->getMessage();
} finally {
    $connection = null;
}
echo "Success insert to DB" .PHP_EOL;


