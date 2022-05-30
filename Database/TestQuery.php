<?php

/*
    Return results of database queries
*/

require_once __DIR__. "/Connection.php";

$connection = getConnection();

try{
    $sql = <<<SQL
        SELECT * FROM customers
    SQL; // multi line string in php

    $result = $connection->query($sql);
} catch (PDOException $e){
    echo $e->getMessage();
} finally {
    $connection = null;
}


echo "Success select from DB" .PHP_EOL;
echo "result: " .PHP_EOL;

// Result nya bisa pake foreach

// Jika hasilnya array (nested array)
// foreach ($result as $row) {
//     var_dump($row);
// }

// atau
// jika hasilnya ingin string (tapi tidak rapih)
// foreach($result as $row){
//     foreach ($row as $key => $value) {
//         echo $key . ": " . $value . PHP_EOL;
//     }
// }

// atau
// jika hasilnya ingin string (tapi rapih)
foreach($result as $row){
    $name = $row['name'];
    $email = $row['email'];
    $id = $row['id'];
    echo "Name: $name, Mail: $email, ID: $id" .PHP_EOL;
}

