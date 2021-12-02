<?php

    // contoh object type
    /*
    Jika kita buat variable, katakanlah
    $c = "abc";
    jika kita instanceof dengan string, maka akan false, karena $c bukan bagian dari string
    beda dengan python, variable c merupakan objek dari string
    pada php objek hanya diciptakan dari class.
    sedangkan di python, semua hal adalah object.
    untuk illustrasinya perhatikan kode berikut,

    di php nama class gaboleh sama di dalam satu project, file ataupun program,
    jika file tersebut tidak mengandung keyword namespace
    artinya class yang ada di file tersebut akan menjadi
    class global, artinya bisa diakses di seluruh project.
    */

    $c = "abc";
    $c instanceof String ? print "true" : print "false"; // false
    echo "\n";

    // buat object
    class str{
        public function __construct($str){
            $this->str = $str;
        }
    }

    $strg = new str("Hello World");
    $strg instanceof str ? print "true" : print "false"; // true
    echo "\n";
    echo PHP_EOL;
    echo "Contoh lain: ";
    echo PHP_EOL;

    class Produk {
        public $judul, $penulis, $penerbit, $harga;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }
        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
    }

    class CetakInfoProduk {
        public function cetak( Produk $produk ) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }

    // inisialisasi object
    $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
    $produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
    echo "Komik : " . $produk1->getLabel();
    echo PHP_EOL;
    echo "Game : " . $produk2->getLabel();
    echo PHP_EOL;

    $infoProduk1 = new CetakInfoProduk();
    echo $infoProduk1->cetak($produk1);
    echo "\n";
    echo PHP_EOL;
    echo "Contoh lain: ";
    echo PHP_EOL;

    class ProdukLain {
        private $judul, $penulis, $penerbit, $harga, $diskon = 0;

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

        public function getInfoProduk() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
        }
    }

    class KomikLain extends ProdukLain {
        public $jmlHalaman;
        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
            parent::__construct( $judul, $penulis, $penerbit, $harga );
            $this->jmlHalaman = $jmlHalaman;
        }
        public function getInfoProduk() {
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }

    class GameLain extends ProdukLain {
        public $waktuMain;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
            parent::__construct( $judul, $penulis, $penerbit, $harga );
            $this->waktuMain = $waktuMain;
        }
        public function getInfoProduk() {
            $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
            return $str;
        }
    }
    class CetakInfoProdukLain {
        protected $daftarProduk = array();
        public function tambahProduk( ProdukLain $produk ) {
            $this->daftarProduk[] = $produk;
        }
        public function cetak() {
            // $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            // return $str;
            $str = 'DAFTAR PRODUK : <br>';
            $i = 1;
            foreach( $this->daftarProduk as $p ) {
                $str .= $i++ . ". ";
                $str .= "{$p->getInfoProduk()})";
                $str .= "<br>";
            }
            return $str;
        }
    }

    // $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    // $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

    // echo $produk1->getInfoProduk();
    // echo "<br>";
    // echo $produk2->getInfoProduk();
    // echo "<hr>";

    // $produk2->setDiskon(50);
    // echo $produk2->getHarga();
    // echo "<hr>";

    // $produk1->setPenulis("Sandhika Galih");
    // echo $produk1->getPenulis();

    $produk1 = new KomikLain("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new GameLain("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

    $cetakProduk = new CetakInfoProdukLain();
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    echo $cetakProduk->cetak();
