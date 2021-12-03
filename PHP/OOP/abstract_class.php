<?php

    /*
    Abstract classes and methods are when the parent class has a named method,
    but need its child class(es) to fill out the tasks.

    An abstract class is a class that contains at least one abstract method.
    An abstract method is a method that is declared, but not implemented in the code.
    */

    abstract class PersonAbstract{

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

        // declare abstract method
        abstract public function printLocation(): string;
        abstract public function printRegion(): string;
        abstract public function printAddress(): string;
        abstract public function printBio(): string;
    }

    class Domicile extends PersonAbstract{
        // fill abstract method
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

        // override __construct method
        public function __construct($name, $age, $address){
            parent::__construct(
                $name,
                $age,
                $country="Indonesia",
                $city="Jakarta",
                $region="Jabodetabek",
                $address
            );
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
            );
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
            );
        }
    }

    // example of accessing abstract class property
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

    abstract class ParentClass {
        // Abstract method with an argument
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass {
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
