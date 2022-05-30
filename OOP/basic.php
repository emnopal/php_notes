<?php

    // create object Person
    class PersonBasic {
        // properties
        // best practice: always declare properties at the top of the class
        // even though they are construtor
        public $name, $age;

        // methods
        function set_name($name) {
            $this->name = $name;
        }
        function set_age($age) {
            $this->age = $age;
        }
        function get_name() {
            return $this->name;
        }
        function get_age() {
            return $this->age;
        }
    }

    $person1 = new PersonBasic();
    $person1->set_name("John");
    $person1->set_age(35);

    $person2 = new PersonBasic();
    $person2->set_name("Peter");
    $person2->set_age(37);

    $person3 = new PersonBasic();
    $person3->set_name("Ben");
    $person3->set_age(43);

    // call methods
    echo $person1->get_name() . " is " . $person1->get_age() . " years old."; // John is 35 years old.
    echo "\n";
    echo $person2->get_name() . " is " . $person2->get_age() . " years old."; // Peter is 37 years old.
    echo "\n";
    echo $person3->get_name() . " is " . $person3->get_age() . " years old."; // Ben is 43 years old.
    echo "\n";

    // we can change the property inside the class using setter methods
    echo "\n\nBefore change: \n";
    echo $person2->name . " is " . $person2->age . " years old."; // Peter is 37 years old.
    $person2->set_age(47);
    echo "\nAfter change: \n";
    echo $person2->get_name() . " is " . $person2->get_age() . " years old."; // Peter is 47 years old.


    // Access modifier (public)
    // because the property is public, we also can access and change it directly outside the class
    // call property directly without using getter and setter methods
    // only works if the property is public
    // $this keyword refers to the current object, and is only available inside methods
    echo "\n";
    echo $person1->name . " is " . $person1->age . " years old."; // John is 35 years old.
    echo "\n";
    echo $person2->name . " is " . $person2->age . " years old."; // Peter is 37 years old.
    echo "\n";
    echo $person3->name . " is " . $person3->age . " years old."; // Ben is 43 years old.

    // change property directly outside the class
    echo "\n\nBefore change: \n";
    echo $person1->name . " is " . $person1->age . " years old."; // John is 35 years old.
    $person1->age = 43;

    echo "\nAfter change: \n";
    echo $person1->name . " is " . $person1->age . " years old."; // John is 43 years old.

    // instanceof keyword to check if an object belongs to a specific class, alias of isinstance() in Python
    if ($person1 instanceof PersonBasic) echo "\n" ."True"; else echo "\n" ."False"; // True
