<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Abdul";
$student1->value = 75;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Abdul";
$student2->value = 75;

$student3 = new Student();
$student3->id = "2";
$student3->name = "Ghani";
$student3->value = 86;

$student4 = new Student();
$student4->id = "3";
$student4->name = "Anin";
$student4->value = 48;

/*
Perbedaan == dengan ===
jika == maka tidak akan mengecek tipe data
jika === maka akan mengecek tipe data
*/

$student1 == $student1 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Same
$student1 == $student2 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Same
$student1 == $student3 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student1 == $student4 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student2 == $student2 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Same
$student2 == $student3 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student3 == $student4 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different

$student1 === $student1 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Same
$student1 === $student2 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student1 === $student3 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student1 === $student4 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student2 === $student2 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Same
$student2 === $student3 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student3 === $student4 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different

$student1 > $student1 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student1 > $student2 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student1 > $student3 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student1 > $student4 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student2 > $student2 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student2 > $student3 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student3 > $student4 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different

$student1 < $student1 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student1 < $student2 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student1 < $student3 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student1 < $student4 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Same
$student2 < $student2 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Different
$student2 < $student3 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Same
$student3 < $student4 ? print "Same" .PHP_EOL : print "Different" .PHP_EOL; // Same

