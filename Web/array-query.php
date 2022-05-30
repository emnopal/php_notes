<?php
/*
Saat mengakses Web, kita akan menggunakan URL, dan di dalam URL, terdapat bagian yang bernama query parameter
Query parameter adalah informasi tambahan yang bisa kita kirimkan dari client ke server secara dinamis
Untuk menambahkan query parameter, cukup gunakan ? diikuti dengan key=value pada URL
Di PHP, semua query parameter akan secara otomatis disimpan dalam global variable bernama $_GET
Contoh query parameter http://www.example.com/index.php?nama=test&umur=2

$_GET adalah global variable berupa array yang berisikan key sesuai dengan nama query parameter,
dan value sesuai dengan value query parameter
Jika kita mengirim query parameter name=test dan umur=2, artinya akan ada
key nama di dalam $_GET yang bernilai test
key umur di dalam $_GET yang bernilai 2
Perlu diperhatikan, query parameter adalah data yang dikirim oleh client, jadi pastikan sebelum
menggunakannya kita harus cek apakah datanya ada atau tidak, karena bisa jadi datanya tidak dikirim oleh client

*/

// Contoh query parameter

// $say = "Hello " . $_GET["nama"] . " you are " . $_GET["umur"] . " years old";

// contoh penggunaan: http://localhost:8080/query-parameter.php/?nama=testing%20query%20parameter&umur=11
// kalo parameter nama atau umur ada yang sama maka akan dipilih yang paling terakhir
// contoh penggunaan: http://localhost:8080/query-parameter.php/?nama=testing%20query%20parameter&nama=test123&umur=11&umur=21
// maka resultnya akan berupa nama test123 dan umur 21

// dia juga bisa menggunakan array
// http://localhost:8080/query-parameter.php/?nama[]=testing%20query%20parameter&nama[]=test123&umur[]=11&umur[]=21
// tambahin tanda [] pada nama dan umur untuk input array

// Contoh query parameter array

// $numbers = $_GET["numbers"];
// $total = 0;
// foreach ($numbers as $number) {
//     $total += $number;
// }

// http://localhost:8080/array-query.php/?numbers[]=1 maka akan keluar 1
// http://localhost:8080/array-query.php/?numbers[]=1&numbers[]=2&numbers[]=3&numbers[]=4 maka akan keluar 10

// script seperti diatas bahaya, karena bisa masukin celah keamanan, hal ini dinamakan Cross-Site Scripting
// jadi kita bisa masukin script js ke dalam si variable $_GET
// dan itu bakal berbahaya, karena bisa masukin script yang bisa merusak website
// coba test uri dibawah ini: dia bakal buat web browser hang
// http://localhost:8080/query-parameter.php/?nama=testing%3Cscript%3Ealert(%22Test%22)%3C/script%3E&umur=%3Cscript%3Efor%20(let%20i=0;%20i%20%3C%2010;%20i++){alert(%22Test%22);}%3C/script%3E


// solusi nya gimana?
// ini solusinya

if (is_string($_GET["numbers"])){
    $total = $_GET["numbers"];
} else if (is_numeric($_GET["numbers"])){
    $total = $_GET["numbers"];
} else {
    $numbers = $_GET["numbers"];
    $numbers = array_map("htmlspecialchars", $numbers);
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
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
    <h1><?php echo "Total = " .$total; ?></h1>
</body>
</html>