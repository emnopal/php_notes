<?php namespace Data\Car;

interface HasBrand{
    function getBrand(): string;
}

interface IsMaintenance{
    function isMaintenance(): bool;
}

interface Car extends HasBrand{  // interface can extends another interface or even class
    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car, IsMaintenance{ // class can implements more than 2 interfacess

    public function drive(): void{
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int{
        return 4;
    }

    public function getBrand(): string{
        return "Toyota";
    }

    public function isMaintenance(): bool{
        return false;
    }
}

class Jazz implements Car, IsMaintenance{

    public function drive(): void{
        echo "Drive Jazz" . PHP_EOL;
    }

    public function getTire(): int{
        return 4;
    }

    public function getBrand(): string{
        return "Honda";
    }

    public function isMaintenance(): bool{
        return false;
    }
}

class Ayla implements Car, IsMaintenance{

    public function drive(): void{
        echo "Drive Ayla" . PHP_EOL;
    }

    public function getTire(): int{
        return 4;
    }

    public function getBrand(): string{
        return "Nissan";
    }

    public function isMaintenance(): bool{
        return false;
    }
}