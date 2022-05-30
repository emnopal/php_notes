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
    solusinya bagaimana?
    jika ada hal yang harus diimplementasikan di child class, karena mungkin
    jika diimplementasikan di parent class atau class, akan menimbulkan
    penulisan berulang, sehingga untuk solusi multiple abstract class ini,

    1.  untuk sesuatu yang harus diimplementasikan dan mau mengimplementasikan class
        yang memiliki banyak bentuk (polymorphism) gunakan interface.
    2.  dan jika tidak ada yang harus diimplementasikan dan class tersebut
        mempunyai banyak bentuk, gunakan trait.
    3.  dan jika tidak ada yang harus diimplementasikan dan class tersebut
        mempunyai satu bentuk, gunakan class atau abstract class.

    di php nama class gaboleh sama di dalam satu project, file ataupun program,
    jika file tersebut tidak mengandung keyword namespace
    artinya class yang ada di file tersebut akan menjadi
    class global, artinya bisa diakses di seluruh project.
    */

    interface InfoProduksi{
        // setter
        public function setJudul($judul);
        public function setPenulis($penulis);
        public function setPenerbit($penerbit);
        public function setHarga($harga);
        public function setDiskon($diskon);

        // getter
        public function getJudul();
        public function getPenulis();
        public function getPenerbit();
        public function getHarga();
        public function getDiskon();
        public function getLabel();
        public function getInfo();
    }

    abstract class Produk implements InfoProduksi {
        private $judul, $penulis, $penerbit, $harga, $diskon = 0, $set_currency = "Rp";

        public function __construct(
            $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function setJudul($judul) {
            $this->judul = $judul;
        }

        public function getJudul() {
            return $this->judul;
        }

        public function setPenulis($penulis) {
            $this->penulis = $penulis;
        }

        public function getPenulis() {
            return $this->penulis;
        }

        public function setPenerbit($penerbit) {
            $this->penerbit = $penerbit;
        }

        public function getPenerbit() {
            return $this->penerbit;
        }

        public function setDiskon($diskon) {
            $this->diskon = $diskon;
        }

        public function getDiskon() {
            return $this->diskon;
        }

        public function setHarga($harga) {
            $this->harga = $harga;
        }

        public function setCurrency($set_currency) {
            $this->set_currency = $set_currency;
        }

        public function getHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        abstract public function getInfoProduk();

        public function getInfo() {
            $this->harga = (string) (round($this->harga));
            switch ($this->harga){
                /*
                    == -> tidak usah peduli dengan tipe data
                    === -> tipe data harus sesuai
                */
                case strlen($this->harga) === 4:
                    $this->harga = substr($this->harga, 0, 1) . "." . substr($this->harga, 1, 4);
                    break;
                case strlen($this->harga) === 5:
                    $this->harga = substr($this->harga, 0, 2) . "." . substr($this->harga, 2, 5);
                    break;
                case strlen($this->harga) === 6:
                    $this->harga = substr($this->harga, 0, 3) . "." . substr($this->harga, 3, 6);
                    break;
                case strlen($this->harga) === 7:
                    $this->harga = substr($this->harga, 0, 1). "." . substr($this->harga, 1, 4) . "." . substr($this->harga, 4, 7);
                    break;
                default:
                    $this->harga = $this->harga;
            }
            $str = "{$this->judul} | {$this->getLabel()} ({$this->set_currency}. {$this->harga})";
            return $str;
        }

    }

    class Komik extends Produk {
        public function __construct(
            $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0,
            $jmlHalaman = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfoProduk() {
            $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }

    class Film extends Produk {
        public function __construct(
            $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0,
            $panjangFilm = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->panjangFilm = $panjangFilm;
        }

        public function getInfoProduk() {
            $str = "Film : " . $this->getInfo() . " - {$this->panjangFilm} Jam.";
            return $str;
        }
    }


    class Game extends Produk {
        public function __construct(
            $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0,
            $waktuMain = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuMain = $waktuMain;
        }

        public function getInfoProduk() {
            $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
            return $str;
        }
    }

    class CetakInfoProduk {
        public $daftarProduk = array();

        public function tambahProduk( Produk $produk ) {
            $this->daftarProduk[] = $produk;
        }

        public function cetak() {
            $str = "DAFTAR PRODUK : " .PHP_EOL;

            foreach( $this->daftarProduk as $p ) {
                $str .= "- {$p->getInfoProduk()} " .PHP_EOL;
            }
            // kalo mau append string dari loop pake .=

            return $str;
        }
    }

    $produk1 = new Komik(judul:"Naruto", penulis:"Masashi Kishimoto", penerbit:"Shonen Jump", harga:30000, jmlHalaman:100);
    $produk1->setCurrency("$");
    $produk2 = new Game(judul:"Uncharted", penulis:"Neil Druckmann", penerbit:"Sony Computer", harga:250000, waktuMain:50);
    $produk3 = new Film(judul:"Interstellar", penulis:"Christoper Nolan", penerbit:"Paramount Pictures", harga:45000, panjangFilm:2.5);
    $produk4 = new Game(judul:"GTA V", penulis:"-", penerbit:"Rockstar", harga:125520.87, waktuMain:500);

    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    $cetakProduk->tambahProduk($produk3);
    $cetakProduk->tambahProduk($produk4);
    echo $cetakProduk->cetak();
