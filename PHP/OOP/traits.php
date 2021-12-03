<?php

    /*
    Solving multiple inheritance problem
    PHP only supports single inheritance: a child class can inherit only from one single parent.
    Trait only supports function and variable.
    Trait is like class, but it can't be initialized.
    */

    // initialize trait
    trait PersonBio{
        public $min_age = 1;
        public function id(){
            echo "ID: " .$this->id ." ";
        }
        public function name(){
            echo "Name: " .$this->name ." ";
        }
        public function age(){
            if ($this->age == $this->min_age){
                echo "Age: " .$this->age ." year old" ." ";
            } else{
                echo "Age: " .$this->age ." years old" ." ";
            }
        }
    }

    trait PersonLocation{
        public function country(){
            echo "Country: " .$this->country ." ";
        }
        public function city(){
            echo "City: " .$this->city ." ";
        }
        public function region(){
            echo "Region: " .$this->region ." ";
        }
        public function address(){
            echo "Address: " .$this->address ." ";
        }
        public function domicile(){
            echo "Domicile: " .$this->domicile ." ";
        }
    }

    trait PersonConstruct{
        // best practice: always declare properties at the top of the class
        // even though they are construtor
        public $name, $age, $country, $city, $region, $address;
        // can initialize constructor here
        public function __construct($id, $name, $age, $country, $city, $region, $address, $domicile){
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->country = $country;
            $this->city = $city;
            $this->region = $region;
            $this->address = $address;
            $this->domicile = $domicile;
        }
    }

    trait PrintPersonBio{
        public function printBio(){
            $this->id();
            $this->name();
            $this->age();
            $this->country();
            $this->city();
            $this->region();
            $this->address();
            $this->domicile();
        }
    }

    trait TaxPerson{
        public $min_tax_age = 25;
        public function tax($country_tax_usage=0.25){
            if ($this->age > $this->min_tax_age){
                echo "$this->name need to pay the Tax: $" .$this->age * $country_tax_usage ." (in US$) ";
            } else{
                echo "Free Tax";
            }
        }
    }

    class PersonTraits{
        use PersonBio, PersonLocation, PersonConstruct, PrintPersonBio, TaxPerson;
    }


    $person1 = new PersonTraits(12, "Abdul", 36, "Indonesia", "Jakarta", "Jabodetabek", "Jl. Setiabudi No.1", "Jakarta");
    $person1->printBio();
    echo "\n";
    $person1->address(); // get address() method
    echo "\n";
    $person1->domicile = "Southeast Asia"; // override domicile, that's why it's important to use access modifier
    $person1->printBio();
    echo "\n";
    echo $person1->tax(); // get tax() method
    echo "\n";

    // other example
    $person2 = new PersonTraits(13, "Budi", 32, "Indonesia", "Bandung", "West Java", "Jl. Setiabudi No.1", "Bandung");
    $person2->printBio();
