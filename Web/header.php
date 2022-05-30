<?php

    /*
        Header adalah informasi tambahan dari HTTP request atau HTTP Response.
        Dalam HTTP request dan response, terdapat data yang bernama Header
        Header biasanya digunakan sebagai tempat menyimpan informasi tambahan diluar URL, METHOD dan BODY
        Di PHP, kita bisa menangkap data header yang dikirim oleh Client atau membuat header di response dari Server
        Semua header yang dikirim oleh Client, secara otomatis akan dimasukkan ke global variable $_SERVER
        Namun key untuk header akan secara otomatis di konversi menjadi UPPERCASE,
        dan jika terdapat spasi atau - , akan otomatis diganti menjadi _
        Selain itu untuk membedakan request header dan lainnya, khusus request header, akan ditambah prefix HTTP_
        Misal header Content-Type akan menjadi HTTP_CONTENT_TYPE
        Header Accept-Language akan menjadi HTTP_ACCEPT_LANGUAGE

    */

    // Mencoba menangkap header

    $client = $_SERVER['HTTP_CLIENT_NAME'];

    // by default akan print hello + warning, karena tidak ada header yang dikirim
    echo "Hello $client"; // menangkap header

    // by default, php jarang mengirim header
    // kecuali kalau mengirim konten dari javascript seperti ajax

    // ketika ada header yang dikirim
    // bisa di test di postman, tambahin header Client-name = namalu
    // nanti keluar Hello namalu

    // jika ada tambahan header yang dikirim
    header('Application: Belajar PHP Web');
    header('Author: Test123');

    // buat liat header tambahan bisa diliat di postman

?>