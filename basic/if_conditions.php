<?php

    /*

    Supported Operators:

    Operator	Name	                    Example	    Result
    ==	        Equal	                    $x == $y	Returns true if $x is equal to $y
    ===	        Identical	                $x === $y	Returns true if $x is equal to $y, and they are of the same type
    !=	        Not equal	                $x != $y	Returns true if $x is not equal to $y
    <>	        Not equal	                $x <> $y	Returns true if $x is not equal to $y
    !==	        Not identical	            $x !== $y	Returns true if $x is not equal to $y, or they are not of the same type
    >	        Greater than	            $x > $y	    Returns true if $x is greater than $y
    <	        Less than   	            $x < $y	    Returns true if $x is less than $y
    >=	        Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y
    <=	        Less than or equal to	    $x <= $y	Returns true if $x is less than or equal to $y
    <=>	        Spaceship	                $x <=> $y	Returns an integer less than, equal to, or greater than zero,
                                                        depending on if $x is less than, equal to, or greater than $y.
    and	        And	                        $x and $y	True if both $x and $y are true
    or	        Or	                        $x or $y	True if either $x or $y is true
    xor	        Xor	                        $x xor $y	True if either $x or $y is true, but not both
    &&	        And	                        $x && $y	True if both $x and $y are true
    ||	        Or	                        $x || $y	True if either $x or $y is true
    !	        Not	                        !$x	        True if $x is not true

    Operator:   ?
    Name:       Ternary
    Example:    $x = expr1 ? expr2 : expr3
    Result:     Returns the value of $x. The value of $x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE

    Operator:   ??
    Name:       Null coalescing
    Example:    $x = expr1 ?? expr2
    Result:     Returns the value of $x. The value of $x is expr1 if expr1 exists, and is not NULL.
                If expr1 does not exist, or is NULL, the value of $x is expr2. Introduced in PHP 7

    */

    # usage:
    function str_a_contains($str_a = "Hello World") {
        if ($str_a == "Hello World") {
            return true;
        } else {
            return false;
        }
    }

    # print boolean result
    if (str_a_contains("Hello World")) echo "Returned true!\n"; else echo "Returned false!\n";
    if (str_a_contains("Hello Only")) echo "Returned true!\n"; else echo "Returned false!\n";

    for ($i=0; $i < 100; $i++) {
        if ($i%3 == 0) {
            echo $i . " ";
        }
        else {
            if ($i%5 != 1) {
                echo $i . " ";
            }
        }
    }

    function numnum($num=0){
        if ($num == 0) {
            return "Zero";
        } elseif ($num < 10) {
            return "Less than 10";
        } elseif ($num < 100) {
            return "Less than 100";
        } else {
            return "Greater than 100";
        }
    }

    function numnum_less_than_5($num=0){
        switch ($num) {
            case 0:
                return "Zero";
                break;
            case 1:
                return "One";
                break;
            case 2:
                return "Two";
                break;
            case 3:
                return "Three";
                break;
            case 4:
                return "Four";
                break;
            case 5:
                return "Five";
                break;
            default:
                return "Greater than 5";
                break;
        }
    }

    echo "\n" .numnum(20) . "\n";
    echo numnum_less_than_5(4) . "\n";
    echo numnum_less_than_5(20) . "\n";

    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    }
    echo "\n";

    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo "\n";

    $t = date("H");

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo "\n";

    $favcolor = "black";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }

