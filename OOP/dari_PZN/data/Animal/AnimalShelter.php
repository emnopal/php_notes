<?php namespace Data\Animal;

require_once "Animal.php";

interface AnimalShelter{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter{
    public function adopt(string $name): Cat{
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter{
    public function adopt(string $name): Dog{
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}

class FishShelter implements AnimalShelter{
    public function adopt(string $name): Fish{
        $fish = new Fish();
        $fish->name = $name;
        return $fish;
    }
}

class BirdShelter implements AnimalShelter{
    public function adopt(string $name): Bird{
        $bird = new Bird();
        $bird->name = $name;
        return $bird;
    }
}