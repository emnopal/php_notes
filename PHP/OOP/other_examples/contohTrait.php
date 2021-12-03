<?php

    /*
    class ApaKabar{
        public function apaKabar() {
            return "Apa kabar?";
        }
    }

    class SelamatPagi{
        public function selamatPagi() {
            return "Selamat pagi?";
        }
    }

    class Pesan{//}

    // diatas ada 3 class, jika kita mau extend class
    // ApaKabar() dan SelamatPagi() ke Pesan(), maka tidak bisa
    // karena PHP hanya bisa extend satu class saja

    // sehingga dibutuhkan metode traits

    // begini method nya


    */

    trait ApaKabar{
        public function apaKabar() {
            return "Apa kabar?";
        }
    }

    class Pesan{
        // menggunakan use
        use ApaKabar;
    }

    $obj = new Pesan();
    echo $obj->apaKabar();
    echo "\n";

    // Multiple Traits
    trait ApaKabar1{
        public function apaKabar() {
            return "Apa kabar?" . PHP_EOL;
        }
    }

    trait SelamatPagi{
        public function selamatPagi() {
            return "Selamat pagi?";
        }
    }

    class Pesan1{
        // menggunakan trait lebih dari satu
        use ApaKabar1, SelamatPagi;
    }

    $obj = new Pesan1();
    echo $obj->apaKabar();
    echo $obj->selamatPagi();

    // lebih lanjut kunjungi: https://khoerodin.id/object-oriented-php/trait-dalam-oop-php/