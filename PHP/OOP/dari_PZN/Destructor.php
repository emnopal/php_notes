<?php

/*
Destructor, destroy all of the objects
or end of class/script
*/

require_once "data/Person.php";

$person1 = new Person("John", "Jakarta");
$person1->sayHello($person1->name);
$person2 = new Person("Jane", "Bandung");
$person2->sayHello($person2->name);


echo "Program Ended" .PHP_EOL;
// destructor called
// Object person Jane is destroyed
// Object person John is destroyed