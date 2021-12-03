<?php

// Create own properties and methods, without explicitly declaring them inside class

class Zero{
    private array $properties = [];

    // build in getter
    public function __get($name){
        return $this->properties[$name];
    }

    // build in setter
    public function __set($name, $value){
        $this->properties[$name] = $value;
    }

    // assign value to sets of properties
    public function __isset($name): bool{
        return isset($this->properties[$name]);
    }

    // delete value from sets of properties
    public function __unset($name){
        unset($this->properties[$name]);
    }

    // calling method, use for calling the methods
    public function __call($name, $arguments){
        $join = join(" ", $arguments);
        echo "Call function $name with arguments $join". PHP_EOL;
    }

    // calling static method, use for calling the methods with static methods
    public static function __callStatic($name, $arguments){
        $join = join(" ", $arguments);
        echo "Call static function $name with arguments $join". PHP_EOL;
    }

}

$zero = new Zero();
$zero->Name = "Eko";
$zero->Address = "Jakarta";
$zero->Age = 21;

echo "Name : $zero->Name" . PHP_EOL;
echo "Address : $zero->Address" . PHP_EOL;
echo "Age : $zero->Age" . PHP_EOL;

$zero->sayMyName("Hello", "World");
Zero::sayMyName("Hello", "World");


