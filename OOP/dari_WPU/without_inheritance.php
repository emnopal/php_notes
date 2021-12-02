<?php

    /*
    di php nama class gaboleh sama di dalam satu project, file ataupun program,
    jika file tersebut tidak mengandung keyword namespace
    artinya class yang ada di file tersebut akan menjadi
    class global, artinya bisa diakses di seluruh project.
    */

    class ProdukWithout {
        public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe=" " ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman; // bakal jadi problem karena ada 2 tipe
            $this->waktuMain = $waktuMain; // bakal jadi problem karena ada 2 tipe
            $this->tipe = $tipe; // solusinya disini[1]
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoLengkap() {
            // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
            // [1]solusi buat constructor yang punya banyak tipe
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            if( $this->tipe == "Komik" ) {
                $str .=  " - {$this->jmlHalaman} Halaman.";
            } else if( $this->tipe == "Game" ) {
                $str .= " ~ {$this->waktuMain} Jam.";
            }

            return $str;
        }

    }

    class CetakInfoProdukWithout {
        public function cetak(ProdukWithout $produk) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }

    $produk1 = new ProdukWithout("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
    $produk2 = new ProdukWithout("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");
    echo $produk1->getInfoLengkap() .PHP_EOL;
    echo $produk2->getInfoLengkap() .PHP_EOL;

    $cetak1 = new CetakInfoProdukWithout();
    echo $cetak1->cetak($produk1);

