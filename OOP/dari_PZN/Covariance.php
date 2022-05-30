<?php

require_once "data/Animal/Animal.php";
require_once "data/Animal/AnimalShelter.php";
require_once "data/Animal/Food.php";

$catShelter = new \Data\Animal\CatShelter();
$cat = $catShelter->adopt("Luna"); // assign nama ke parent class nya -> class Cat
/*berdasarkan class $cat:
    public function CatShelter::adopt(string $name): Cat{
            $cat = new Cat(); // initialize class Cat inside child class
            $cat->name = $name; // assign nama ke parent class nya -> class Cat
            return $cat; // return class Cat

    jadi $catShelter bisa jadi $cat karena return $cat
    }*/
// bisa ambil nama dari child class ke parent class
$cat->eat(new \Data\Animal\AnimalFood()); // panggil method di parent class
$cat->run(); // panggil method di parent class

$dogShelter = new \Data\Animal\DogShelter();
$dog = $dogShelter->adopt("Ray");
$dog->eat(new \Data\Animal\AnimalFood());
$dog->run();

$fishShelter = new \Data\Animal\fishShelter();
$fish = $fishShelter->adopt("Sherina");
$fish->eat(new \Data\Animal\AnimalFood());
$fish->run();

$birdShelter = new \Data\Animal\birdShelter();
$bird = $birdShelter->adopt("Jax");
$bird->eat(new \Data\Animal\AnimalFood());
$bird->run();
