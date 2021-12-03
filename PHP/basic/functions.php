<?php

    # function
    function hello_world() {
        echo "hello world";
    }
    print hello_world(); // hello world
    print "\n";

    function hello_world_with_parameter($name) {
        echo "hello world, $name";
    }
    print hello_world_with_parameter("test"); // hello world, test
    print "\n";

    function familyName($fname, $year) {
        echo "$fname Refsnes. Born in $year ";
    }
    print familyName("Hege", "1975");
    print "\n";
    print familyName("Stale", "1978");
    print "\n";
    print familyName("Kai Jim", "1983");
    print "\n";

    # user defined function
    function add($a=2, $b=4) { # user defined function
        return $a + $b;
    }

    print "results of 2 + 4 = " .add(); # user can use default value for parameter
    print "\nresults of 4 + 8 = " .add(4,8); # or can define new parameter

    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    #echo addNumbers(5, "5 days"); // will be error
    echo "\n" .addNumbers(5, "5"); # "5" is converted to int 5