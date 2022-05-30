<?php

/*
Saat kita belajar HTML, kita tahu bahasa di HTML terdapat form
Form biasanya digunakan untuk mengirim data dari Client ke Server
Secara default, method di form adalah GET, sehingga saat kita submit,
data akan dikirim dalam bentuk Query Parameter yang bisa ditangkap menggunakan $_GET di PHP

Namun jika kita gunakan Form dengan method POST, maka secara otomatis
request dari Client ke Server akan beruba HTTP POST, hal ini menyebabkan
data form yang dikirim akan dikirim melalui Body, bukan Query Parameter, dan
untuk menerima datanya di PHP, kita perlu menggunnakan $_POST

$_POST adalah global variable yang berisikan data array yang dikirim dari Client ke Server dalam bentuk form post
Cara penggunaan $_POST sama seperti $_GET
*/
// buat form post
?>

<html>
<body>
<table>
    <tr>
        <td>Username</td>
        <td><?= $_POST['username'] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $_POST['mail'] ?></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><?php echo hash("sha256", hash("sha256", $_POST['password'])); ?></td>
    </tr>
</table>
</body>
</html>