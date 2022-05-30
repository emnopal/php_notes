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

if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Disposition: attachment; filename="transkipxdikti.csv"');
    header('Content-Type: text/csv');
    readfile(__DIR__ . '/uploaded_files/transkipxdikti.csv');
    exit();
}else{
    echo "Invalid Key";
}