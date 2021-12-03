<?php

    class Fruit{
        // properties
        // best practice: always declare properties at the top of the class
        // even though they are construtor
        public $name, $color;

        // methods

        // Constructor
        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        function get_name() {
            return $this->name;
        }
        function get_color() {
            return $this->color;
        }

        // Destructor
        // A destructor is called when the object is destructed or the script is stopped or exited.
        //  __destruct() function will automatically call this method at the end of the script.
        // sometimes is useful to close database connection, or close file handle, or close socket connection
        // like finally in try-catch-finally
        function __destruct() {
            echo "destruct\n";
        }

    }

    $apple = new Fruit("Apple", "Red");
    echo $apple->get_name() . " is " . $apple->get_color() . " color."; // Apple is Red color.
    echo "\n";

    $apple->__destruct(); // destruct // will destruct apple object

    echo "\n" ."after calling destruct: \n";
    echo $apple->get_name() . " is " . $apple->get_color() . " color."; // Apple is Red color.

    $banana = new Fruit("Banana", "Yellow");
    echo $banana->get_name() . " is " . $banana->get_color() . " color.";
    echo "\n";