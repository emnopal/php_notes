<?php

    /*
    Interfaces allow you to specify what methods a class should implement.

    Interfaces make it easy to use a variety of different classes in the same way.
    When one or more classes use the same interface, it is referred to as "polymorphism".

    Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

    Interfaces cannot have properties, while abstract classes can
    All interface methods must be public, while abstract class methods is public or protected
    All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
    Classes can implement an interface while inheriting from another class at the same time

    */

    interface PersonInterface{
        /*
        Interface cannot have properties, and constructor
        but can have methods and const
        */

        // by default, interface methods are public and abstract

        // declare interface method
        public function printLocation(): string;
        public function printRegion(): string;
        public function printAddress(): string;
        public function printBio(): string;
    }

    class Domicile implements PersonInterface{

        // best practice: always declare properties at the top of the class
        // even though they are construtor
        public $name, $age, $country, $city, $region, $address;

        // declare constructor
        public function __construct($name, $age, $country, $city, $region, $address){
            $this->name = $name;
            $this->age = $age;
            $this->country = $country;
            $this->city = $city;
            $this->region = $region;
            $this->address = $address;
        }

        // fill interface method
        public function printLocation(): string{
            return $this->city . ", " . $this->country;
        }
        public function printRegion(): string{
            return $this->region;
        }
        public function printAddress(): string{
            return $this->address . ", " .$this->printLocation();
        }
        public function printBio(): string{
            return "I'm " .$this->name ." a person who is " .$this->age ." years old, who lived in " .$this->printAddress();
        }
    }

    class JakartaDomicile extends Domicile{

        // best practice: always declare properties at the top of the class
        // even though they are construtor
        public $name, $age, $country, $city, $region, $address;

        // override __construct method
        public function __construct($name, $age, $address){
            parent::__construct(
                $name,
                $age,
                $country="Indonesia",
                $city="Jakarta",
                $region="Jabodetabek",
                $address
            ); // access modifier must be same as parent class as it use parent::__construct() method
        }
    }

    class BandungDomicile extends Domicile{

        // override __construct method
        public function __construct($name, $age, $address){
            parent::__construct(
                $name,
                $age,
                $country="Indonesia",
                $city="Bandung",
                $region="West Java",
                $address
            ); // access modifier must be same as parent class as it use parent::__construct() method
        }
    }

    class SurabayaDomicile extends Domicile{

        // override __construct method
        public function __construct($name, $age, $address){
            parent::__construct(
                $name,
                $age,
                $country="Indonesia",
                $city="Surabaya",
                $region="East Java",
                $address
            ); // access modifier must be same as parent class as it use parent::__construct() method
        }
    }

    $person1 = new JakartaDomicile($name="Abdul", $age=32, $address="Jl. Setiabudi No.1");
    $person2 = new BandungDomicile($name="Ujang", $age=46, $address="Jl. Asia Afrika No.1");
    $person3 = new SurabayaDomicile($name="David", $age=45, $address="Jl. Ahmad Yani No.1");

    echo $person1->printBio(); // I'm Abdul a person who is 32 years old, who lived in Jl. Setiabudi No.1, Jakarta, Indonesia
    echo "\n";

    echo $person2->printBio(); // I'm Ujang a person who is 46 years old, who lived in Jl. Asia Afrika No.1, Bandung, Indonesia
    echo "\n";

    echo $person3->printBio(); // I'm David a person who is 45 years old, who lived in Jl. Ahmad Yani No.1, Surabaya, Indonesia


    echo "\n";
    echo "\n";
    echo "Other Example: ";
    echo "\n";
    interface ParentInterface {
        // Abstract method with an argument
        // public $name; -> no need to declare properties in interface
        public function prefixName($name);
    }

    class ChildClass implements ParentInterface {
        public function prefixName($name, $separator = ".", $greet = "Dear") {
            if ($name == "John Doe") {
                $prefix = "Mr";
            } elseif ($name == "Jane Doe") {
                $prefix = "Mrs";
            } else {
                $prefix = "";
            }
            return "{$greet} {$prefix}{$separator} {$name}";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe"); // Mr. John Doe
    echo "\n";
    echo $class->prefixName("Jane Doe"); // Mrs. Jane Doe
