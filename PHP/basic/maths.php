<?php

    /*
        available math operators:
        Function	    Description
        abs()	        Returns the absolute (positive) value of a number
        acos()	        Returns the arc cosine of a number
        acosh()	        Returns the inverse hyperbolic cosine of a number
        asin()	        Returns the arc sine of a number
        asinh()	        Returns the inverse hyperbolic sine of a number
        atan()      	Returns the arc tangent of a number in radians
        atan2()	        Returns the arc tangent of two variables x and y
        atanh()	        Returns the inverse hyperbolic tangent of a number
        base_convert()	Converts a number from one number base to another
        bindec()	    Converts a binary number to a decimal number
        ceil()	        Rounds a number up to the nearest integer
        cos()	        Returns the cosine of a number
        cosh()	        Returns the hyperbolic cosine of a number
        decbin()	    Converts a decimal number to a binary number
        dechex()	    Converts a decimal number to a hexadecimal number
        decoct()	    Converts a decimal number to an octal number
        deg2rad()	    Converts a degree value to a radian value
        exp()	        Calculates the exponent of e
        expm1()	        Returns exp(x) - 1
        floor()	        Rounds a number down to the nearest integer
        fmod()	        Returns the remainder of x/y
        getrandmax()	Returns the largest possible value returned by rand()
        hexdec()	    Converts a hexadecimal number to a decimal number
        hypot()	        Calculates the hypotenuse of a right-angle triangle
        intdiv()	    Performs integer division
        is_finite()	    Checks whether a value is finite or not
        is_infinite()	Checks whether a value is infinite or not
        is_nan()	    Checks whether a value is 'not-a-number'
        lcg_value()	    Returns a pseudo random number in a range between 0 and 1
        log()	        Returns the natural logarithm of a number
        log10()	        Returns the base-10 logarithm of a number
        log1p()	        Returns log(1+number)
        max()	        Returns the highest value in an array, or the highest value of several specified values
        min()	        Returns the lowest value in an array, or the lowest value of several specified values
        mt_getrandmax()	Returns the largest possible value returned by mt_rand()
        mt_rand()	    Generates a random integer using Mersenne Twister algorithm
        mt_srand()	    Seeds the Mersenne Twister random number generator
        octdec()	    Converts an octal number to a decimal number
        pi()	        Returns the value of PI
        pow()	        Returns x raised to the power of y
        rad2deg()	    Converts a radian value to a degree value
        rand()	        Generates a random integer
        round()	        Rounds a floating-point number
        sin()	        Returns the sine of a number
        sinh()	        Returns the hyperbolic sine of a number
        sqrt()	        Returns the square root of a number
        srand()	        Seeds the random number generator
        tan()	        Returns the tangent of a number
        tanh()	        Returns the hyperbolic tangent of a number

    available math constants:
        Constant	        Value	                Description
        INF	                INF	                    The infinite
        M_E	                2.7182818284590452354	Returns e
        M_EULER	            0.57721566490153286061	Returns Euler constant
        M_LNPI	            1.14472988584940017414	Returns the natural logarithm of PI: log_e(pi)
        M_LN2	            0.69314718055994530942	Returns the natural logarithm of 2: log_e 2
        M_LN10	            2.30258509299404568402	Returns the natural logarithm of 10: log_e 10
        M_LOG2E	            1.4426950408889634074	Returns the base-2 logarithm of E: log_2 e
        M_LOG10E	        0.43429448190325182765	Returns the base-10 logarithm of E: log_10 e
        M_PI	            3.14159265358979323846	Returns Pi
        M_PI_2	            1.57079632679489661923	Returns Pi/2
        M_PI_4	            0.78539816339744830962	Returns Pi/4
        M_1_PI	            0.31830988618379067154	Returns 1/Pi
        M_2_PI	            0.63661977236758134308	Returns 2/Pi
        M_SQRTPI	        1.77245385090551602729	Returns the square root of PI: sqrt(pi)
        M_2_SQRTPI	        1.12837916709551257390	Returns 2/square root of PI: 2/sqrt(pi)
        M_SQRT1_2	        0.70710678118654752440	Returns the square root of 1/2: 1/sqrt(2)
        M_SQRT2	            1.41421356237309504880	Returns the square root of 2: sqrt(2)
        M_SQRT3	            1.73205080756887729352	Returns the square root of 3: sqrt(3)
        NAN	                NAN	                    Not A Number
        PHP_ROUND_HALF_UP	1	Round halves up
        PHP_ROUND_HALF_DOWN	2	Round halves down
        PHP_ROUND_HALF_EVEN	3	Round halves to even numbers
        PHP_ROUND_HALF_ODD	4	Round halves to odd numbers

        available arithmetic functions:
        Operator	Name	        Example	    Result	Show it
        +	        Addition    	$x + $y	    Sum of $x and $y
        -	        Subtraction	    $x - $y	    Difference of $x and $y
        *	        Multiplication	$x * $y	    Product of $x and $y
        /	        Division	    $x / $y	    Quotient of $x and $y
        %	        Modulus	        $x % $y	    Remainder of $x divided by $y
        **	        Exponentiation	$x ** $y	Result of raising $x to the $y'th power
    */

    # usage:

    print "arithmetic operations: \n";
    print "x: 2, y: 3\n";
    $x = 2;
    $y = 3;
    print "+: ";
    print $x + $y; // 5
    print "\n-: ";
    print $x - $y; // -1
    print "\n*: ";
    print $x * $y; // 6
    print "\n/: ";
    print $x / $y; // 0.6666666666666666
    print "\nmod (%): ";
    print $x % $y; // 2
    print "\nexponentiation (**): ";
    print $x ** $y; // 8
    print "\n";
    print "\n";

    # pi
    print "pi: ";
    print pi(); // 3.141592653589793
    print "\n";
    print "\n";

    # exponent -> e^(num) -> exp(num)
    print "exponent: \n";
    print "exp(1): ";
    print exp(1); // 2.718281828459045
    print "\nexp(2): ";
    print exp(2); // 7.38905609893065
    print "\n";
    print "\n";

    # log -> log(num, base)
    print "log: \n";
    print "log(1): ";
    print log(1); // 0
    print "\nlog(5): ";
    print log(5); // 1.6094379124341003
    print "\nlog(4.2342): ";
    print log(4.2342); // 1.5
    print "\n10log(2): ";
    print log(2, 10); // 0.3010299956639812
    print "\n2.33log(3.34): ";
    print log(3.34, 2.33); // 1.5
    print "\n";
    print "\n";

    # log -> log10(num) or equivalent to log(num, 10)
    print "log10: \n";
    print "10log(1): ";
    print log10(1); // 0
    print "\n10log(5): ";
    print log10(5); // 0.6989700043360189
    print "\n10log(4.32479)";
    print log10(4.32479); // 0.9079365079365079
    print "\n";
    print "\n";

    # sqrt -> sqrt(num)
    print "sqrt: \n";
    print "sqrt(1.234): ";
    print sqrt(1.234); // 1.118033988749895
    print "\nsqrt(9): ";
    print sqrt(9); // 3
    print "\n";
    print "\n";

    # pow -> pow(num, exponent)
    print "pow: \n";
    print "3.5^14: ";
    print pow(3.5,14); // 5.85987448204886
    print "\n2^3: ";
    print pow(2,3); // 8
    print "\n";
    print "\n";

    # abs -> abs(num)
    print "abs: ";
    print "\nabs(-1): ";
    print abs(-1); // 1
    print "\nabs(1): ";
    print abs(1); // 1
    print "\n";
    print "\n";

    # ceil -> ceil(num)
    print "ceil: ";
    print "\nceil(4.6)";
    print ceil(4.6); // 5
    print "\n";
    print "\n";

    # floor -> floor(num)
    print "floor: ";
    print "\nfloor(4.6)";
    print floor(4.6); // 4
    print "\n";
    print "\n";

    # round -> round(num)
    print "round: ";
    print "\nround(4.6): ";
    print round(4.6); // 5
    print "\nround(4.62453, 1): ";
    print round(4.62453, 1); // 4.6
    print "\nround(4.62453, 2): ";
    print round(4.62453, 2); // 4.62
    print "\nround(4.62453, 3): ";
    print round(4.62453, 3); // 4.624
    print "\nround(4.62453, 4): ";
    print round(4.62453, 4); // 4.6245
    print "\n";
    print "\n";

    # rand -> rand() or rand(min, max)
    print "random number: ";
    print "\nget random number from 1-10: ";
    print rand(1,10); // random number
    print "\nget random number: ";
    print rand(); // random number
    print "\n";
    print "\n";

    # min -> min(num1, num2, num3, ...) or min(array)
    # max -> max(num1, num2, num3, ...) or max(array)
    print "min max func: ";
    $arr = array(1,2,3,4,5);
    print "\nmax: ";
    print max($arr); // 5
    print "\nmin: ";
    print min($arr); // 1
    print "\n";
    print "\n";
