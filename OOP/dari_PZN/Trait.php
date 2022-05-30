<?php

/*
Mulai dari PHP 8, jika kita override function dari abstract function di traits
jika parameter, parameter tipe data jika di override di
class, maka akan error
*/

require_once "data/Traits/SayGoodBye.php";

use Data\Traits\{Person, ParentPerson};

echo "Person" .PHP_EOL;
// Instantiate a new Person object
$person = new Person(); // ParentPerson is useless here, because all method
                        // with the same name had overridden by "All" trait
$person->goodBye("Budi");
$person->hello("Joko");

// Override name property
$person->name = "Yadi";
var_dump($person);

echo PHP_EOL ."ParentPerson" .PHP_EOL;
// Instantiate a new ParentPerson object
$parentPerson = new ParentPerson(); // ParentPerson is useless here, because all method
// with the same name had overridden by "All" trait
$parentPerson->goodBye("Budi"); // args will useless here
$parentPerson->hello("Joko"); // args will useless here

// Override name property
$parentPerson->name = "Jedi"; // property declare dynamically since there is not initialized in parentPerson class
var_dump($parentPerson);

// calling method
#$parentPerson->run(); // this is will throw error, because run() is not defined



