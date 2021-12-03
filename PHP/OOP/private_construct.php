<?php

    // what if we create private __construct()?
    /*

    class PersonInheritPrivateConstruct {

        public $name; // can be accessed anywhere
        public $age; // can be accessed anywhere
        protected $country; // can be accessed only inside the class and subclasses (derived classes)
        private $city; // can be accessed only inside the class

        // constructor
        private function __construct($name, $age, $country, $city){
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
        function get_address(){
            return $this->address;
        }
    }

    ALL OF THIS WILL BE UNNECESSARY SINCE THIS CONSTRUCTOR IS PRIVATE
    class PrintPerson extends PersonInherit{

        // inherit all properties and methods from Person class

        function person_info(){
            echo "Name: " . $this->name . "\n";
            echo "Age: " . $this->age . "\n";
            echo "Country: " . $this->country . "\n";
            echo "City: " . $this->city . "\n";
        }

        function person_info_getter(){
            echo "Name: " . $this->get_name() . "\n";
            echo "Age: " . $this->get_age() . "\n";
            echo "Country: " . $this->get_country() . "\n";
            echo "City: " . $this->get_city() . "\n";
        }

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
        function set_new_address($address){
            $this->set_address($address); // will thrown an error since set_adress method is private
        }
        function address(){
            return $this->get_address(); // will thrown an error since $this->address is private
        }

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
    */
