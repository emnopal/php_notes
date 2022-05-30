<?php

    class PersonInherit {

        // best practice: always declare properties at the top of the class
        // even though they are construtor
        public $name, $age; // can be accessed anywhere
        protected $country; // can be accessed only inside the class and subclasses (derived classes)
        private $city; // can be accessed only inside the class

        // constructor
        function __construct($name, $age, $country, $city){
            $this->name = $name;
            $this->age = $age;
            $this->country = $country;
            $this->city = $city;
        }

        // setter methods
        protected function set_region($region){
            $this->region = $region;
        }
        private function set_address($address){
            $this->address = $address;
        }

        // getter methods
        function get_name(){
            return $this->name;
        }
        function get_age(){
            return $this->age;
        }
        function get_country(){
            return $this->country;
        }
        function get_city(){
            return $this->city;
        }
        protected function get_location(){
            echo $this->city . ", " . $this->country ."\n";
        }
        protected function get_region(){
            return $this->region;
        }
        private function get_address(){
            return $this->address;
        }
    }

    class PrintPerson extends PersonInherit{

        // inherit all properties and methods from Person class

        // call parent property
        function person_info(){
            echo "Name: " . $this->name . "\n";
            echo "Age: " . $this->age . "\n";
            echo "Country: " . $this->country . "\n";
            echo "City: " . $this->city . "\n"; // cannot access this since it is private parent property
        }

        // call parent method (getter)
        function person_info_getter(){
            echo "Name: " . $this->get_name() . "\n";
            echo "Age: " . $this->get_age() . "\n";
            echo "Country: " . $this->get_country() . "\n";
            echo "City: " . $this->get_city() . "\n";
        }

        // protected and private methods from parent class
        // can be accessed in extended class, since it is protected
        function location(){ // this converted from protected to public
            return $this->get_location();
        }

        // can be accessed in extended class, since it is protected
        function set_location_region($region){ // this converted from protected to public
            $this->set_region($region); // still can be accessed in extended class
        }

        function region(){ // this converted from protected to public
            echo $this->get_region(); // still can be accessed in extended class
        }

        // this will throw an error since it is private
        /*function set_new_address($address){
            $this->set_address($address); // will thrown an error since set_adress method is private
        }
        function address(){
            return $this->get_address(); // will thrown an error since $this->address is private
        }*/

    }

    $person1 = new PrintPerson("John", 35, "Indonesia", "Jakarta");
    //$person1->person_info(); // will show some errors in city since it is private
    //echo "\n";
    $person1->person_info_getter(); // Name: John, Age: 35, Country: Indonesia, City: Jakarta
    $person1->location(); // Jakarta, Indonesia
    $person1->set_location_region("West Java");
    $person1->region(); // West Java
    echo "\n". $person1->get_city(); // Jakarta

    echo "\n";
    $person1->name; // John
    $person1->age; // 35
    // $person1->country; // Indonesia -> cannot access since it is protected from parent class
    // $person1->city; // Jakarta -> cannot access since it is private from parent class

    // will thrown an error since it's derived from private method or property
    // $person1->set_new_address("Jalan Raya");
    // echo $person1->address();

    echo "\n";

    // Overriding class

    final class OverridePersons extends PersonInherit{ // final keyword, so cannot be extended

        // inherit all properties and methods from Person class
        // best practice: always declare properties at the top of the class
        // even though they are construtor
        public $name, $age, $country, $city, $region, $address;

        function __construct($name, $age, $country, $city, $region, $address){
            $this->name = $name;
            $this->age = $age;
            $this->country = $country; // overriding property from private to public
            $this->city = $city; // overriding property from private to public
            $this->region = $region; // set new property in constructor
            $this->address = $address; // set new property in constructor
        }

        function person_info(){
            echo "Name: " . $this->name . "\n";
            echo "Age: " . $this->age . "\n";
            echo "Country: " . $this->country . "\n";
            echo "City: " . $this->city . "\n"; // can be accessed and no longer private
            echo "Region: " . $this->region . "\n";
            echo "Address: " . $this->address . "\n";
        }

        function get_region(){ // can be accessed because it is no longer protected
            return $this->region;
        }

        function get_address(){ // can be accessed because it is no longer private
            return $this->address;
        }

        function person_info_getter(){
            echo "Name: " . $this->get_name() . "\n";
            echo "Age: " . $this->get_age() . "\n";
            echo "Country: " . $this->get_country() . "\n";
            echo "City: " . $this->get_city() . "\n";
            echo "Region: " . $this->get_region() . "\n";
            echo "Address: " . $this->get_address() . "\n"; // can be accessed because it is no longer private
        }

    }

    $person2 = new OverridePersons("John", 35, "Indonesia", "Jakarta", "West Java", "Jalan Raya");
    $person2->person_info(); // Name: John, Age: 35, Country: Indonesia, City: Jakarta, Region: West Java, Address: Jalan Raya
    echo "\n";
    $person2->person_info_getter(); // Name: John, Age: 35, Country: Indonesia, City: Jakarta, Region: West Java, Address: Jalan Raya
    echo "\n";

    // if we try to extend final class, it will throw an error
    /*
    class ExtendOveridePersons extends OverridePersons{} // will throw an error since it is final
    // error msg: Class ExtendOveridePersons may not inherit from final class (OverridePersons)
    */

