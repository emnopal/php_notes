<?php

        /*
        Supported operators
        Assignment	Same as...	Description	Show it
        x = y	x = y	The left operand gets set to the value of the expression on the right
        x += y	x = x + y	Addition
        x -= y	x = x - y	Subtraction
        x *= y	x = x * y	Multiplication
        x /= y	x = x / y	Division
        x %= y	x = x % y	Modulus
        */

        # Declare variable
        $a = 12;
        $b = 14;

        # operate with variable
        $results = $a + $b;

        # Print statement
        echo $a + $b; // without appending to string
        echo "\nresults of $a + $b is $results"; // appending to string

        # changed variable (PHP is pass by reference)
        $c = "Hello World";
        echo "\n$c";

        $c = "Changed Hello World";
        echo "\n$c";

        # assign variable

        $a += 12;
        echo "\n$a"; // 24

        $a -= 12;
        echo "\n$a"; // 12

        $a *= 12;
        echo "\n$a"; // 144

        $a /= 12;
        echo "\n$a"; // 12

        $a %= 12;
        echo "\n$a"; // 0

        # scope

        # local variable
        # variable inside function
        function local_scope() {
                $d = 12;
                echo "\n$d";
        }

        echo "\n\nlocal scope : ";
        echo local_scope();
        # will be error: Undefined variable: d
        #echo "\n$d";
        echo " ";

        # global variable
        # variable inside function
        function global_scope() {
                global $e;
                $e = 120;
                echo "\n$e";
        }
        echo "\n\nglobal scope: ";
        echo global_scope();
        # will be not error
        echo "\n$e";

        # variable outside function
        # will be error
        /*
        function scope_outside_function() {
                echo "\n$a"; # undefined variable
        }

        same as

        global $f;
        $f = 40;

        function scope_outside_function() {
                echo "\n$f"; # undefined variable
        }

        echo "\n\nscope outside function: ";
        echo scope_outside_function();
        */

        // for make above code work, use this
        function var_outside_function() {
                $a_inside = $GLOBALS['a'];
                echo "\n$a_inside";
        }

        echo "\n\nscope outside function: ";
        echo var_outside_function();
        echo " ";

        # static variable
        # variable g will be saved in memory

        # variable inside function
        function static_variable() {
                static $g = 10;
                $g++;
                echo "\n$g";
        }

        echo "\n\nstatic variable: ";
        echo static_variable(); // 11
        echo static_variable(); // 12
        echo static_variable(); // 13
        echo static_variable(); // 14
        # echo "$g"; # undefined variable

        echo "\n";
        # variable outside function
        static $h = 10;
        $h++;
        echo "$h\n"; // 11

        # constant
        # variable that can't be changed
        define("PI", 3.14);
        define("PHP_VER", "8.2 Version");
        define("Nums", array(1,2,3,4,5));
        define("NumsOdd", [1,3,5,7,9]);
        echo "\n";
        echo PI;
        echo "\n";
        echo PHP_VER;
        echo "\n";
        print_r(Nums);
        echo "\n";
        print_r(NumsOdd);
        echo "\n";

        #constant are global
        function PIE() {
                echo PI;
        }
        echo PIE();

