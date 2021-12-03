<?php
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Yahya";
$student1->value = 445;

$student1(1, "eko", true, "joko");