<?php

require_once "data/Student.php";

$students = new Student();
$students->id = 20;
$students->name = "Pesho";
$students->value = 78;
$students->setSample("This is Sample");

// showing the debug info, and all methods in Student class
var_dump($students);