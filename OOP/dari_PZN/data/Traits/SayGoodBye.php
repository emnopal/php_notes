<?php namespace Data\Traits;

/*
Mulai dari PHP 8, jika kita override function dari abstract function di traits
jika parameter, parameter tipe data jika di override di
class, maka akan error
*/

trait SayGoodBye{
    public function goodBye(?string $name): void{
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello{
    public function hello(?string $name): void{
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName{
    public string $name;
}

trait CanRun{
    public abstract function run(): void;
}

class ParentPerson {
    public function goodBye(?string $name): void{
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void{
        echo "Hello in Person" . PHP_EOL;
    }

}

trait All {
    use SayGoodBye, SayHello, HasName, CanRun {
        // bisa di override
        // hello as private;
        // goodBye as private;
    }
}

class Person extends ParentPerson{
    use All; // all the method in ParentPerson will be overridden by this trait
    public function run(): void{
        echo "Person $this->name is running" . PHP_EOL;
    }
}