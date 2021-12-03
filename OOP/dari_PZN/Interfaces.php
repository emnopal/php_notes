<?php

require_once "data\Car\Car.php";
use Data\Car\{Avanza, Jazz, Ayla};

$car1 = new Avanza();
$car1->drive();

$car1 = new Jazz();
$car1->drive();

$car1 = new Ayla();
$car1->drive();