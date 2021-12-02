<?php

    /*

    Interface adalah sebuah class yang seluruh methodnya adalah abstract method,
    karena seluruh methodnya adalah abstract method sehingga
    interface perlu diimplementasikan oleh child class.
    Secara konsep Interface memiliki kemiripan dengan abstract class

    Perbedaan mencolok dari abstract class dan interface adalah
    abstract class memiliki keyword extends (sama kaya inheritance)
    karena pada dasarnya abstract adalah class yang dapat di inisialisasi
    sehingga, di dalam abstract class dapat memiliki:

        1. method yang kosong
            public function foo() {};
        2. method yang diimplementasikan
            public function bar($a) {
                return $a;
            };
        3. constructor
            public function __construct() {};
        4. property
            public $foo;
        5. access modifier
            public, private, protected
        6. constanta
            const FOO = 'bar';
        7. jika ada keyword abstract wajib di implementasikan oleh child class
            abstract public function foo();
        8. jika tidak ada keyword abstract maka child class tidak perlu implementasikan method

    sedangkan, pada interface, hanya memiliki:

        1. method yang kosong
            public function foo() {};
        2. constanta
            const FOO = 'bar';

    interface juga tidak memiliki access modifier, karena interface hanya
    sebagai sebuah konsep dari class yang harus di
    implementasikan oleh child class, sehingga tidak perlu ada access modifier.
    dan method yang ada di interface secara default adalah abstract method, sehingga
    wajib untuk diimplementasikan oleh child class.

    interface bisa digunakan bersamaan dengan class,
    contoh:
    class bus extends Kendaraan implements KendaraanInterface{}

    interface juga bisa digunakan bersamaan dengan interface lainnya
    contoh:
    class bus extends Kendaraan implements KendaraanInterface, KendaraanInterface2{}

    sedangkan, jika abstract class tidak bisa digunakan bersamaan
    (multiple abstract class)
    karena sifat class di php yang seperti itu

    */

    /*
    di php nama class gaboleh sama di dalam satu project, file ataupun program,
    jika file tersebut tidak mengandung keyword namespace
    artinya class yang ada di file tersebut akan menjadi
    class global, artinya bisa diakses di seluruh project.
    */

    interface InfoProduk_ {
        public function getInfoProduk();
    }

    Abstract class Produk_ {
        protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function setJudul( $judul ) {
            $this->judul = $judul;
        }

        public function getJudul() {
            return $this->judul;
        }

        public function setPenulis( $penulis ) {
            $this->penulis = $penulis;
        }

        public function getPenulis() {
            return $this->penulis;
        }

        public function setPenerbit( $penerbit ) {
            $this->penerbit = $penerbit;
        }

        public function getPenerbit() {
            return $this->penerbit;
        }

        public function setDiskon( $diskon ) {
            $this->diskon = $diskon;
        }

        public function getDiskon() {
            return $this->diskon;
        }

        public function setHarga( $harga ) {
            $this->harga = $harga;
        }

        public function getHarga() {
            return $this->harga - ( $this->harga * $this->diskon / 100 );
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        abstract public function getInfo();

    }


    class Komik_ extends Produk_ implements InfoProduk_ {
        public $jmlHalaman;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

            parent::__construct( $judul, $penulis, $penerbit, $harga );

            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfo() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
        }

        public function getInfoProduk() {
            $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }


    class Game_ extends Produk_ implements InfoProduk_ {
        public $waktuMain;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
            parent::__construct( $judul, $penulis, $penerbit, $harga );

            $this->waktuMain = $waktuMain;
        }

        public function getInfo() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
        }

        public function getInfoProduk() {
            $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
            return $str;
        }
    }


    class CetakInfoProduk_ {
        public $daftarProduk = array();

        public function tambahProduk( Produk_ $produk ) {
            $this->daftarProduk[] = $produk;
        }

        public function cetak() {
            $str = "DAFTAR PRODUK : " .PHP_EOL;

            foreach( $this->daftarProduk as $p ) {
                $str .= "- {$p->getInfoProduk()}".PHP_EOL;
            }

            return $str;
        }
    }


    # buat objek dari class Komik_ dan Game_
    $produk1 = new Komik_("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new Game_("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

    $cetakProduk = new CetakInfoProduk_();
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    echo $cetakProduk->cetak();
    echo "\n";