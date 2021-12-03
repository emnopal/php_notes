<?php

    /*
    di php nama class gaboleh sama di dalam satu project, file ataupun program,
    jika file tersebut tidak mengandung keyword namespace
    artinya class yang ada di file tersebut akan menjadi
    class global, artinya bisa diakses di seluruh project.
    */

    class ProdukConstructor {
        public $judul, $penulis, $penerbit, $harga;

        public function __construct( $judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0 ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

    }

    $produk1 = new ProdukConstructor("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
    $produk2 = new ProdukConstructor("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
    $produk3 = new ProdukConstructor("Dragon Ball");

    echo "Komik : " . $produk1->getLabel() .PHP_EOL;
    echo "Game : " . $produk2->getLabel() .PHP_EOL;
    var_dump($produk3);