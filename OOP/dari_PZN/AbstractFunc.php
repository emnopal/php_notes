<?php

require_once "data/Animal/Animal.php";

use data\Animal\{Cat, Dog, Fish, Bird};

$cat = new Cat();
$cat->name = "Matt";
$cat->run(); // Cat Matt is running

$cat = new Dog();
$cat->name = "Jose";
$cat->run(); // Dog Jose is running

$cat = new Fish();
$cat->name = "Jean";
$cat->run(); // Fish Jean is running

$cat = new Bird();
$cat->name = "Joe";
$cat->run(); // Bird Joe is running