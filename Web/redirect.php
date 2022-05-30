<?php
// gimana cara redirect di php

// Untuk melakukan redirect, kita hanya butuh menggunakan response header Location
// yang berisi url redirect nya, bisa dalam domain yang sama, atau ke domain berbeda, misal :
// Location : /admin.php => artinya redirect ke halaman admin di domain yang sama
// Location : https://www.google.com => artinya redirect ke halaman google

// contoh redirect

// header('Location: https://www.google.com'); // bakalan redirect ke google
// exit();

// kalo di satu aplikasi
header('Location: /php-info.php');
exit();
?>