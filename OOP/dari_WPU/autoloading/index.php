<?php

// namespace itu wajib ada satu class yang namanya sama dengan nama file nya
// kalo pake metode autoloading
// kalo pake metode autload pun gitu juga
// kaya kode dibawah ini

require_once 'App/init.php';

$produk1 = new _Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new _Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new _CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new _Coba();