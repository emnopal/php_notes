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
    echo "\n" .addNumbers(5, "5") .PHP_EOL; # "5" is converted to int 5

    // default parameter, union type and named argument
    // only for php 8 above

    function multiply(int|float $a=1, int|float $b=1): int|float {
        return $a * $b;
    }

    echo multiply(a:12, b:3.45) .PHP_EOL;

    // Nullable

    function stringOrNull(?string $str): ?string {
        return $str;
    }

    echo stringOrNull(null) .PHP_EOL;
    echo stringOrNull("Not Null") .PHP_EOL;

    // variable function

    function stringManip(?string $str, $filter): ?string {
        return $filter($str);
    }

    echo stringManip("hElLo WoRLd", "strtoupper") . PHP_EOL;
    echo stringManip("hElLo WoRLd", "strtolower") . PHP_EOL;
    echo stringManip("hElLo WoRLd", "ucwords") . PHP_EOL;

    // anonymous function -> equivalent to lambda function in python
    // disebut juga Closure

    // contoh 1
    $multiplyBy10 = function (int|float $num): int|float { return $num*10; };
    echo $multiplyBy10(3.14) .PHP_EOL;

    // contoh 2, anonymous func sbg argument
    // pake function stringManip tadi
    echo stringManip("hElLo WoRLd", function (?string $str): ?string {return ucwords(strtolower($str));}) . PHP_EOL;

    // contoh 3
    // mengakses variable dari luar
    // factorial
    $result = 1;
    $factorial = function(int $num)use($result):int{for($i=1;$i<=$num;$i++){$result*=$i;}return $result;};
    echo $factorial(4).PHP_EOL;

    // Arrow function
    // alternative dari anonymous function, lebih mudah pakainya

    $multiplyBy10 = fn(int|float $num) => $num*10;
    echo $multiplyBy10(3.14) .PHP_EOL;

    $lowerStr = fn(?string $str) => strtolower($str);
    echo $lowerStr("HELLO WORLD") .PHP_EOL;

    // callback function
    function stringManipulation(?string $str, callable $filter): ?string {
        $manipulationStr = call_user_func($filter, $str);
        return $manipulationStr;
    }

    echo stringManipulation("hElLo WoRLd", "strtoupper") . PHP_EOL;
    echo stringManipulation("hElLo WoRLd", "strtolower") . PHP_EOL;
    echo stringManipulation("hElLo WoRLd", "ucwords") . PHP_EOL;
    echo stringManipulation("hElLo WoRLd", function (?string $str): ?string {return ucwords(strtolower($str));}) . PHP_EOL;
    echo stringManipulation("hElLo WoRLd", fn($str) => ucwords(strtolower($str))) . PHP_EOL;

