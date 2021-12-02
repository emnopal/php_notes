<?php

    /*
    di php nama class gaboleh sama di dalam satu project, file ataupun program,
    jika file tersebut tidak mengandung keyword namespace
    artinya class yang ada di file tersebut akan menjadi
    class global, artinya bisa diakses di seluruh project.
    */

    class ProdukInherit {
        public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoProduk() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
        }

    }


    class KomikInherit extends ProdukInherit {
        public function getInfoProduk() {
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }


    class GameInherit extends ProdukInherit {
        public function getInfoProduk() {
            $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
            return $str;
        }
    }


    class CetakInfoProdukInherit {
        public function cetak( ProdukInherit $produk ) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }


    $produk1 = new KomikInherit("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
    $produk2 = new GameInherit("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

    echo $produk1->getInfoProduk() .PHP_EOL;
    echo $produk2->getInfoProduk();