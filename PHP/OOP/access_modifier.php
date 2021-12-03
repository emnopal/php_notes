<?php

    // create object Person
    class PersonAccess {
        // properties
        // best practice: always declare properties at the top of the class
        // even though they are construtor
        public $name, $age; // can be accessed anywhere
        protected $country; // can be accessed only inside the class and subclasses (derived classes)
        private $city; // can be accessed only inside the class

        // methods
        // by default, all methods are public
        function set_name($name) {
            $this->name = $name;
        }
        function set_age($age) {
            $this->age = $age;
        }
        function set_country($country){
            $this->country = $country;
        }
        function set_city($city){
            $this->city = $city;
        }
        function get_name() {
            return $this->name;
        }
        function get_age() {
            return $this->age;
        }
        function get_country(){
            return $this->country;
        }
        function get_city(){
            return $this->city;
        }
        protected function set_region($region){
            $this->region = $region;
        }
        protected function get_location(){
            return $this->city . ", " . $this->country;
        }
        protected function get_region(){
            return $this->region;
        }
        private function set_address($address){
            $this->address = $address;
        }
        private function get_address(){
            return $this->address;
        }
    }

    // we can still access the method since the method is public (by default public)
    $person1 = new PersonAccess();
    $person1->set_name("John");
    $person1->set_age(35);
    $person1->set_country("Indonesia");
    $person1->set_city("Jakarta");

    echo $person1->get_name() . " is " . $person1->get_age() . " years old from "
        .$person1->get_city() ." in " .$person1->get_country() ."."  ; // John is 35 years old from Jakarta in Indonesia.

    echo "\n". $person1->name; // John
    echo "\n". $person1->age; // 35
    #echo "\n". $person1->country; // will show error since the property is protected
    #echo "\n". $person1->city; // will show error since the property is private

    // what happened if we try to assign protected method?
    //$person1->set_region("Jakarta");
    // will be error, undefined method because
    // it's protected and can't be modified outside the class and it's derive class

    // and what happened if we try to access protected method?
    //echo $person1->get_location();
    // will be error, undefined method because
    // it's protected and can't be accessed outside the class and it's derive class

    // what if we want to try to assign private method?
    //$person1->set_address("Jakarta");
    // will be error, undefined method because
    // it's private and can't be modified outside the class and it's derive class

    // this is what happens if we try to access private method
    //echo $person1->get_address();
    // will be error, undefined method because
    // it's private and can't be accessed outside the class and it's derive class
