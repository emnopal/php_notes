<?php

require_once "data/Person.php";

$obj = new Person("Joko Widodo", "Solo");

// echo $obj; -> error since echo is for string

// solution
var_dump($obj); // convert it to array map