<?php

/*
    Dalam spesifikasi HTTP, response dari server biasanya memiliki code, atau dikenal HTTP Response Code
    Secara  default, di PHP, response code adalah 200 OK
    Ada banyak sekali HTTP Response Code : https://developer.mozilla.org/id/docs/Web/HTTP/Status
    Dalam pembuatan website mungkin kita jarang sekali melakukan perubahan response code, namun jika nanti kita ingin membuat API menggunakan PHP, response code sangat penting digunakan
*/

// contoh

if (!isset($_GET['nama']) || $_GET['nama'] == "" || !isset($_GET['umur']) || $_GET['umur'] == ""){
    http_response_code(400);
    echo "Masukan input nama atau umur";
    exit();
} else{
    http_response_code(200);
    $say = "Hello " . htmlspecialchars($_GET["nama"]) . " you are " . htmlspecialchars($_GET["umur"]) . " years old";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Query Parameter</title>
</head>
<body>
    <h1><?php echo $say; ?></h1>
</body>
</html>