<?php

// konvert tipe data apapun ke object

// int to object
$int_coba = 20;
$obj_coba = (object) $int_coba;
var_dump($obj_coba); // scalar: int(20)

// string to object
$str_coba = '20';
$obj_coba = (object) $str_coba;
var_dump($obj_coba); // scalar: string(2) 20

// array to object
$array_coba = [
    "First" => 20,
    "Second" => 21,
    "Third" => 22,
];

$obj_coba = (object) $array_coba;
var_dump($obj_coba); // scalar: array(3) { ["First"]=> int(20) ["Second"]=> int(21) ["Third"]=> int(22) }

echo "First Object $obj_coba->First" . PHP_EOL;
echo "Second Object $obj_coba->Second" . PHP_EOL;
echo "Third Object $obj_coba->Third" . PHP_EOL;

// convert balik lagi ke array
$arrayLagi = (array) $obj_coba;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Joko", "Solo");
var_dump($person);

// convert object to array
$arrayPerson = (array) $person;
var_dump($arrayPerson);


// convert object to string
require_once "data/Student.php";

$student1 = new Student();
$student1->id = 20;
$student1->name = "Joko";
$student1->value = 69;

$string = (string) $student1;
echo $string . PHP_EOL;

// atau bisa juga dengan cara ini
echo $student1 . PHP_EOL;

