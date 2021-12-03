<?php
require_once "data/Person.php";

$person = new Person("Eko", "Subang");
$person->name = "Eko";
$person->address = "Subang";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Budi", null);
$person2->name = "Budi";
$person2->address = null; // "" beda dengan null

var_dump($person2);

$person2 = new Person("Budi", "");
$person2->name = "Budi";
$person2->address = ""; // "" beda dengan null

var_dump($person2);

// error
//$person2->name = [];
