<?php

// namespace itu wajib ada satu class yang namanya sama dengan nama file nya
// kalo pake metode autoloading

require_once 'App/init.php';

use \App\Product as Products;

$produk1 = new Products\Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Products\Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new Products\CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Products\Coba;

echo "<hr>";

new Products\Coba2;