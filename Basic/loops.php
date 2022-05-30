<?php

    /*
        Supported increment and decrement operators
        Operator	Name	        Description
        ++$x	    Pre-increment	Increments $x by one, then returns $x
        $x++	    Post-increment	Returns $x, then increments $x by one
        --$x	    Pre-decrement	Decrements $x by one, then returns $x
        $x--	    Post-decrement	Returns $x, then decrements $x by one

        Supported operators
        Assignment	Same as...	Description
        x = y	    x = y	    The left operand gets set to the value of the expression on the right
        x += y	    x = x + y	Addition
        x -= y	    x = x - y	Subtraction
        x *= y	    x = x * y	Multiplication
        x /= y	    x = x / y	Division
        x %= y	    x = x % y	Modulus
    */

    # loops

    # for loop
    for ($i=0; $i < 10; $i++) {
        print $i;
    }
    print " ";

    # while loop
    $i = 0;
    while ($i < 10) {
        print $i;
        $i++;
    }
    print " ";

    # do while loop
    $i = 0;
    do {
        print $i;
        $i++;
    } while ($i < 10);
    print " ";

    # foreach loop
    $arr = array(1,2,3,4,5);
    foreach ($arr as $value) {
        print $value;
    }

    # increment and decrement
    print "\n\nincrement and decrement operator: ";
    echo "\ninitial variable a = 5!\n";
    echo "\nPostincrement\n";
    $a = 5;
    echo "Should be 5: " . $a++ . "\n";
    echo "Should be 6: " . $a . "\n";

    echo "\nPreincrement\n";
    $a = 5;
    echo "Should be 6: " . ++$a . "\n";
    echo "Should be 6: " . $a . "\n";

    echo "\nPostdecrement\n";
    $a = 5;
    echo "Should be 5: " . $a-- . "\n";
    echo "Should be 4: " . $a . "\n";

    echo "\nPredecrement\n";
    $a = 5;
    echo "Should be 4: " . --$a . "\n";
    echo "Should be 4: " . $a . "\n";

    # postincrement
    for ($i=0; $i < 10; $i++) {
        print $i;
    }
    print " ";

    $i = 0;
    while ($i < 10) {
        print $i;
        $i++;
    }
    print " ";

    # preincrement
    for ($i=0; $i < 10; ++$i) {
        print $i;
    }
    print " ";

    $i = 0;
    while ($i < 10) {
        print $i;
        ++$i;
    }
    print " ";

    # postdecrement
    for ($i=9; $i > -1; $i--) {
        print $i;
    }
    print " ";

    $i = 9;
    while ($i > -1) {
        print $i;
        $i--;
    }
    print " ";

    # predecrement
    for ($i=9; $i > -1; --$i) {
        print $i;
    }
    print " ";

    $i = 9;
    while ($i > -1) {
        print $i;
        --$i;
    }
    print " ";

    $arr_1 = array(1,2,3,4,5);
    $sum = 0;

    foreach ($arr_1 as $value) {
        $sum += $value;
    }

    echo "\n\nSum of array: " . $sum; // 15

    $lambda_arr = 0;
    foreach ($arr_1 as $value) {
        $lambda_arr -= $value;
    }

    echo "\n\nLambda of array: " . $lambda_arr; // -15

    $factorial = 1;
    foreach ($arr_1 as $value) {
        $factorial *= $value;
    }

    echo "\n\nFactorial of array: " . $factorial; // 120

    $dist = 1;
    foreach ($arr_1 as $value) {
        $dist /= $value;
    }

    echo "\n\nDist of array: " . $dist; // 0.0083333333333333

    echo "\n\n";

    $x = 1;
    while($x <= 5) {
        echo "The number is: $x ";
        $x++;
    } // The number is: 1,2,3,4,5

    echo "\n";

    $x = 6;
    while($x <= 5) {
        echo "The number is: $x ";
        $x++;
    } // None

    echo "\n";

    $x = 1;
    do {
        echo "The number is: $x ";
        $x++;
    } while($x <= 5); // The number is: 1,2,3,4,5

    echo "\n";

    $x = 6;
    do {
        echo "The number is: $x ";
        $x++;
    } while($x <= 5); // The number is: 6

    echo "\n";

    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x ";
    } // The number is: 0,1,2,3

    echo "\n";

    for ($x = 0; $x <= 5; $x++) {
        if ($x == 4) {
            continue; # skip 4
        }
        echo "The number is: $x ";
    } // The number is: 0,1,2,3,5,6,7,8,9

    echo "\n";