<?php

    /*
    Cookie adalah data dalam bentuk key-value yang dikirim oleh
    Server pada HTTP Response untuk disimpan di Client (Web Browser)

    Ketika Web Browser menerima cookie, secara otomatis, request selanjutnya cookie tersebut akan dikirim
    di setiap HTTP Request yang dilakukan ke Server

    Untuk membuat cookie di PHP, kita bisa menggunakan function setcookie(...)
    Cookie merupakan bagian dari HTTP Header, jadi pastikan cookie dibuat sebelum content di render di PHP
    Untuk membaca cookie yang dikirim oleh client, kita bisa menggunakan global variable $_COOKIE

    setcookie(
        string $name,
        string $value = "",
        int $expires = 0,
        string $path = "",
        string $domain = "",
        bool $secure = false,
        bool $httponly = false -> wajib true supaya gabisa dibaca js
    ): bool

    */

    setcookie("X-COOKIE", "Test");

    header('Location: /show-cookie.php');

    /*

    Jangan terlalu banyak data di cookie, karena semua data di cookie akan
    selalu dikirim di tiap HTTP Request, semakin banyak, semakin lambat karena
    data yang harus dikirim banyak

    Cookie bisa diubah oleh user, jadi jangan mudah percaya dengan isi cookie,
    misal menyimpan informasi hak akses di cookie

    */

?>