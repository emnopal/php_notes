<?php

$dateTimeDesire = new DateTime(); // buat objek datetime baru
$dateTimeDesire->setDate(2020, 5, 20); // set tanggal
$dateTimeDesire->setTime(14, 30, 12); // set waktu

// Calculate datetime
// Using format() method
echo $dateTimeDesire->format('l, d-m-Y H:i:s') .PHP_EOL; // Wedneday, 20-05-2020 14:30:12
echo $dateTimeDesire->format('d-m-Y H:i:s') .PHP_EOL; // 20-05-2020 14:30:12

$dateTimeDesire->modify('+1 day'); // tambah 1 hari
echo $dateTimeDesire->format('l, d-m-Y H:i:s') .PHP_EOL; // Thursday, 21-05-2020 14:30:12

$dateTimeDesire->modify('-2 day'); // tambah 1 hari
echo $dateTimeDesire->format('l, d-m-Y H:i:s') .PHP_EOL; // Thursday, 21-05-2020 14:30:12

$dateTimeDesire->modify('+1 month'); // tambah 1 bulan
echo $dateTimeDesire->format('l, d-m-Y H:i:s') .PHP_EOL; // Thursday, 21-06-2020 14:30:12

$dateTimeDesire->modify('+1 hour'); // tambah 1 jam
echo $dateTimeDesire->format('l, d-m-Y H:i:s') .PHP_EOL; // Thursday, 21-06-2020 15:30:12

// or using add() method to add DateTime
$dateTimeDesire->add(new DateInterval('P1D')); // tambah 1 hari
echo $dateTimeDesire->format('l, d-m-Y H:i:s') .PHP_EOL; // Saturday, 22-06-2020 15:30:12

$dateTimeDesire->add(new DateInterval('P2M')); // tambah 2 bulan
echo $dateTimeDesire->format('l, d-m-Y H:i:s') .PHP_EOL; // Thursday, 22-08-2020 15:30:12

// or using invert property to subtract DateTime
$dateTimeDesireSubtract = new DateInterval('P4M'); // tambah 4 bulan
$dateTimeDesireSubtract->invert = true; // invert untuk mengurangi 4 bulan
$dateTimeDesire->add($dateTimeDesireSubtract); // tambah 4 bulan
echo $dateTimeDesire->format('l, d-m-Y H:i:s') .PHP_EOL; // Monday, 20-04-2020 15:30:12

echo var_dump($dateTimeDesire); // object(DateTime)#1 (5) { ["date"]=> int(20) ["month"]=> int(6) ["year"]=> int(2020) ["time"]=> int(1530) ["timezone_type"]=> int(1) ["timezone"]=> string(0) "" }

$now = new DateTime(); // buat objek datetime baru pada hari ini
echo var_dump($now); // object(DateTime)#2 (5) { ["date"]=> int(2) ["month"]=> int(12) ["year"]=> int(2021) ["time"]=> int(1957) ["timezone_type"]=> int(1) ["timezone"]=> string(0) "" }
echo $now->format('l, d-m-Y H:i:s') .PHP_EOL; // Thursday, 02-12-2021 12:57:00 -> using utc+0 timezone
$now->setTimezone(new DateTimeZone('Asia/Jakarta')); // set timezone
echo $now->format('l, d-m-Y H:i:s') .PHP_EOL; // Thursday, 02-12-2021 19:57:00 -> using utc+7 timezone

$timeStr = $now->format('H:i:s'); // ambil waktu dari objek datetime
echo $timeStr .PHP_EOL; // 19:57:00

// check datetime format
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone('Asia/Jakarta'));
$date2 = DateTime::createFromFormat("Yy-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone('Asia/Jakarta'));
echo $date ? $date->format('l, d-m-Y H:i:s') .PHP_EOL : 'Invalid Date'; // Invalid Date
echo $date2 ? $date2->format('l, d-m-Y H:i:s') .PHP_EOL : 'Invalid Date'; // Invalid Date


// More information: https://www.php.net/manual/en/class.datetime.php