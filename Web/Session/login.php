<?php

/*
Session adalah mekanisme yang biasa digunakan untuk mengingat interaksi sebelumnya dari Client
Di spesifikasi HTTP, tidak dikenal yang namanya session, karena HTTP di desain stateless
(tidak menyimpan state, data atau informasi apapun)

Session adalah teknik dimana kita bisa menyimpan informasi client di server,
sehingga ketika ada request dari client yang sama, kita bisa tahu dari server
Contohnya session biasanya digunakan ketika proses login, setelah login sukses,
kita akan membuat session, dan request selanjutnya dari client akan membawa informasi session tersebut

$_SESSION adalah global variable array yang berisi data di session
Setelah session kita start, kita bisa menggunakan $_SESSION untuk menyimpan data di session, atau mengambil data di session
Jika session belum di start, perubahan yang kita lakukan di $_SESSION atau pengambilan data di $_SESSION,
tidak akan berpengaruh apa-apa
*/

// cara menjalankan session

session_start(); // wajib selalu menggunakan session_start()

if (!isset($_SESSION['username'])) {
    $_SESSION['login'] = false;
}

if ($_SESSION["login"] == true) {
    header("Location: /Session/success.php");
    exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin") {
        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;
        header("Location: /Session/success.php");
        exit();
    } else {
        $error = "Username atau password salah";
    }
}

/*
    Session merupakan hal yang sangat berbahaya dan tidak direkomendasikan ketika pembuatan aplikasi karena:

    1.  PHP menyimpan session di File. Hal ini tidak direkomendasikan
        untuk menyimpan data yang terlalu besar di session, karena setiap kita melakukan session_start,
        maka secara otomatis session akan di load dari file, dan setelah request selesai, session akan di save di file
        kemudian file bisa saja diakses dari luar melalui backdoor. Kemudian juga karena disimpan di dalam file, maka
        untuk meload file nya akan terasa sangat lambat
    2.  Selain itu penggunaan File menyebabkan masalah scalability,
        karena jika kita menjalankan 2 Web PHP secara bersamaan di server yang berbeda,
        bisa jadi session nya menghilang ketika request dari client masuk ke server yang berbeda
        Oleh karena itu, penggunaan fitur session di PHP sebenarnya jarang sekali digunakan di web yang sudah besar,
        biasanya akan menggunakan alternatif lain untuk management session, seperti Secure Cookie atau JWT (Json Web Token)


*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if ($error != "") { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php } ?>
    <form action="/Session/login.php" method="post">
        <label>Username:
            <input type="text" name="username">
        </label><br>
        <label>Password:
            <input type="password" name="password">
        </label><br>
        <input type="submit" value="login">
    </form>
</body>
</html>