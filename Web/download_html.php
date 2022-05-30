<?php
/*
Memaksa client untuk melakukan download file dengan menggunakan COntend-Disppsition,
sebenarnya sudah ada di standard HTTP Header, ini menggunakan Content-Disposition:
https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Disposition

Jadi di PHP kita cukup dengan menambahkan header tersebut, maka kita bisa secara otomatis
memaksa browser untuk download file yang kita buat menggunakan PHP
Untuk membaca file dan me-load nya di PHP, kita bisa menggunakan
function readfile(filename) : https://www.php.net/manual/en/function.readfile.php
*/

// ini akan mendownload file download.html

$getCurrentDate = date("dmYHis");
// header('Content-Disposition: attachment; filename="$getCurrentDate.html"');
header('Content-Disposition: attachment; filename="' .$getCurrentDate .'".txt"');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download HTML</title>
</head>
<body>
    <h1>Download HTML</h1>
</body>
</html>