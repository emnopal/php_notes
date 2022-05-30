<?php //default namespace: global namespace

    /*

    Apakah Anda pernah mengalami tidak bisa membuat sebuah
    class hanya karena namanya sudah dipakai di tempat lain?
    Apakah Anda pernah menulis kode seperti di bawah ini
    hanya untuk memastikan bahwa nama function yang Anda buat
    tidak bentrok dengan function di tempat lain?

    Dengan namespace, Anda tidak perlu takut class yang
    Anda buat bentrok dengan class yang lain.
    Dengan namespace, Anda tidak perlu takut function
    yang Anda buat memiliki nama yang sama dengan function
    yang lain. Dengan namespace, Anda bisa memberi nama class
    dengan lebih singkat dan jelas, tidak perlu lagi
    menambahkan prefix _blalalalala_blabalbal_ lagi.
    Dengan namespace, Anda bisa mengorganisis kode dengan
    lebih rapi dan terstruktur, sehingga lebih mudah di-maintenance.

    Cara kerja namespace mirip dengan cara kerja folder dan file.
    Dalam satu folder kita tidak bisa membuat 2 buah file dengan
    nama yang sama. Tetapi hal tersebut bisa dilakukan jika foldernya
    berbeda. Misal Anda mempunyai folder C:\Users\tono
    dan C:\Users\guest, maka di masing-masing folder
    tersebut Anda bisa membuat file dengan nama yang sama,
    misalnya suratcinta.txt. Selanjutnya Anda bisa merefer
    kedua file tersebut dengan C:\Users\tono\suratcinta.txt
    dan C:\Users\guest\suratcinta.txt.

    Namespace menjadi semacam pembungkus (encapsulation)
    untuk kode-kode di dalamnya, sehingga masing-masing kode
    memiliki identifier yang unik.

    contoh:

    di dalam sebuah project atau file,
        - di file a.php ada class Person
        - di file b.php ada class Person
    jika gaada namespace, bakalan bentrok class tersebut
    jadi 2 2 nya gabisa dipake. Solusinya?
    pake namespace!

    di file a.php tambahin:
    // not best practice, but it works:
    // namespace MyProject\Subfolder; // kalo pake autoload namanya samain sama filenya dan directory nya

    // best practice:
    namespace MyProject\Subfolder\a;

        class Person {
           // ...
        }
    sama juga di file b, jangan sampe sama nama namespace nya sama

    contoh lainnya,

    -- Australia
        -- Person.php
    -- Indonesia
        -- Person.php
    -- index.php

    di Australia/Person.php
    <?php

    class Person {
        function talk(){
            echo 'Welcome, Bro';
        }

    di Indonesia/Person.php
    <?php

    class Person {
        function talk(){
            echo 'Selamat Datang, Bro';
        }

    di index.php

    <?php

    include 'Australia/Person.php';
    include 'Indonesia/Person.php';

    //tono, orang Indonesia
    $tono = new Person; // Fatal error: Cannot redeclare class Person in ...
    $tono->talk();

    echo '<br />';

    //alex, orang Australia
    $alex = new Person;
    $alex->talk();

    bakalan bentrok karena nama classnya sama.

    caranya biar gak bentrok gimana?
    tambahin namespace!

    di Australia/Person.php
    <?php namespace Australia; // deklarasi namespace
    class Person {
        function talk(){
            echo 'Welcome, Bro';
        }
    }
    sama juga di Indonesia/Person.php

    kemudian di index.php jadi,
    <?php namespace Universe; // deklarasi namespace

    include 'Australia/Person.php';
    include 'Indonesia/Person.php';

    //tono, orang Indonesia
    $tono = new \Indonesia\Person;
    $tono->talk();

    echo '<br />';

    //alex, orang Australia
    $alex = new \Australia\Person;
    $alex->talk();

    // Namespace resolution
    // buat file baru misal test.php

    <?php class Person{} // tanpa namespace

    // lalu tambahin ke index.php
    include 'test.php';
    $obj_test = new Person; // Fatal error: Class 'Universe\Person' not found in ...

    cara solved nya:
    cukup tambahin \ di depan nama classnya.
    $obj_test = new \Person;

    karena dengan kita kasih \ diawal class, artinya kita mengakses global namespace

    kalo akses full namespace pake \namespace\classnya,

    Penjelasan:
    Pada dasarnya, tanpa mendeklarasikan namespace apapun,
    PHP sudah mengenal yang namanya global namespace.
    Semua kode yang kita tulis akan masuk ke global namespace.
    Kemudian ketika kita mendeklarasikan namespace secara eksplisit
    (dengan mengetikkan keyword namespace), maka kode selanjutnya
    yang kita tulis akan otomatis pindah dari global namespace
    menuju namespace buatan kita sendiri. Ibarat file, maka sudah
    beda folder, jadi untuk bisa saling mengakses harus mengetikkan
    full path yang sesuai.

    best practice:
    namain namespace nya sesuai dengan directory struktur file nya.

    kalo di php, kalo function, variable, atau constant gaada di local, maka akan langsung dicari di global namespace.
    kalo ada di local, maka akan langsung dipanggil di local namespace
    kalo seandainya ada di local, trus mau dipanggil di global pake keyword \function() -> sama kaya class tadi
    kalo class, kalo gaada di lokal, bakal throw error

    */

    /*
    cara cek fungsi udah dipakai atau belum
    if ( ! function_exists('format_price'))
    */

    // perhatikan hierarki namespace nya
    require_once 'App/Product/Product.php'; // abstract class (parent class)
    require_once 'App/Product/ProductInfo.php'; // class ProductInfo butuh App/Product/Product
    require_once 'App/Product/Comics.php'; // class Comics butuh namespace App/Product/ProductInfo dan App/Product/Product
    require_once 'App/Product/Games.php'; // class Games butuh namespace App/Product/ProductInfo dan App/Product/Product
    require_once 'App/Product/PrintProductInfo.php'; // class PrintProductInfo butuh namespace App/Product/ProductInfo dan App/Product/Product

    require_once 'App/Product/User.php';
    require_once 'App/Services/User.php';

    // custom name
    // gak berlaku kalau pake metode overload,
    // karena kalo di overload itu nama class harus ada yang sama kaya nama file.php nya
    require_once 'App/Product/test.php';

    /*
    tanpa deklarasi use with alias bakalan error
    karena class Person ada 2
    */

    // without alias
    new App\Product\User($user="Yadi");
    echo PHP_EOL; echo PHP_EOL;
    new App\Services\User($user="Yani");
    echo PHP_EOL; echo PHP_EOL;

    // with alias
    use App\Services\User as ServicesUser;
    use App\Product\User as ProductUser;

    new ServicesUser($user = "Agus");
    echo PHP_EOL; echo PHP_EOL;
    new ProductUser($user = "Budi");
    echo PHP_EOL; echo PHP_EOL;

    // kalau pake custom name
    new \testing\test;
