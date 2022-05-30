<?php namespace Data\Animal;

require_once "Food.php";

abstract class Animal{
    public string $name;
    abstract public function run(): void;
    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal{
    public function run(): void{
        echo "Cat $this->name is running". PHP_EOL;
    }
    public function eat(AnimalFood $animalFood): void{
        echo "Cat $this->name is eating". PHP_EOL;
    }
}

class Dog extends Animal{
    public function run(): void{
        echo "Dog $this->name is running". PHP_EOL;
    }
    public function eat(AnimalFood $animalFood): void{
        echo "Dog $this->name is eating". PHP_EOL;
    }
}

class Fish extends Animal{
    public function run(): void{
        echo "Fish $this->name is swiming". PHP_EOL;
    }
    public function eat(AnimalFood $animalFood): void{
        echo "Fish $this->name is eating". PHP_EOL;
    }
}

class Bird extends Animal{
    public function run(): void{
        echo "Bird $this->name is flying". PHP_EOL;
    }
    public function eat(AnimalFood $animalFood): void{
        echo "Bird $this->name is eating". PHP_EOL;
    }
}
