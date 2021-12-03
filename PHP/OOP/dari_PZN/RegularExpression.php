<?php

/*
Function Regular Expression                     Keterangan
preg_match($pattern, $subject);                 Digunakan untuk mencari match pattern
preg_match_all($pattern, $subject);             Digunakan untuk mencari semua match pattern
preg_replace($pattern, $replacement, $subject); Digunakan untuk mengganti/replace semua pattern dengan replacement
preg_split($pattern, $subject);                 Digunakan untuk memisahkan string berdasarkan pattern dan membuatnya jadi array
*/

// all matches characters
$matches = [];
$result = preg_match('/saya|xiaomi/i', 'Saya pergi ke toko handphone untuk membeli hp xiaomi', $matches);

var_dump($result); // match only one character
var_dump($matches); // Saya

$result = preg_match_all('/saya|xiaomi/i', 'Saya pergi ke toko handphone untuk membeli hp xiaomi', $matches);

var_dump($result); // match all characters contains
var_dump($matches); // Saya, xiaomi

// replace characters
$result = preg_replace('/xiaomi/i', "iPhone", 'Saya pergi ke toko handphone untuk membeli hp xiaomi');
var_dump($result); // Saya pergi ke toko handphone untuk membeli hp iPhone


// split character to array
$result = preg_split('/[\s-]/i', 'Saya pergi ke toko handphone untuk membeli hp-xiaomi'); // split by whitespace
var_dump($result); // ["Saya", "pergi", "ke", "toko", "handphone", "untuk", "membeli", "hp", "xiaomi"]