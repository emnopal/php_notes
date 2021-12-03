<?php

require_once "data/Person.php";
require_once "data/StudentClone.php";

// initialize new object
$person = new Person("John", "Jakarta");

var_dump($person);

echo PHP_EOL;

$student1 = new Data\StudentClone\Student();
$student1->id = "1";
$student1->name = "John";
$student1->value = 100;
$student1->setSample("XXX");

var_dump($student1);

// cloning object 1 to object 2
$student2 = clone $student1;
var_dump($student2);

// cara manual clone
//$student2 = new Student();
//$student2->id = $student1->id;
//$student2->name = $student1->name;
//$student2->value = $student1->value;

// $student1 => clone $student2 => $student2->__clone()

// object itteration
class Data implements IteratorAggregate{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

    // using return statement
    //    public function getIterator()
    //    {
    //        $array = [
    //            "first" => $this->first,
    //            "second" => $this->second,
    //            "third" => $this->third,
    //            "forth" => $this->forth,
    //        ];
    //
    //        return new ArrayIterator($array);
    //    }

    public function getIterator(){
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}