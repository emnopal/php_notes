<?php

    # Data types
    # int
    $int_dtype = 12;

    # float
    $float_dtype = 12.5;

    # string
    $string_dtype = "hello world";

    # boolean
    $boolean_dtype = true;

    # null
    $null_dtype = null;

    # array
    $array_dtype = array(1,2,3,4,5);

    print "int\n";
    print "datatypes: ".var_dump($int_dtype); // int(12)
    print "is int?: ".var_dump(is_int($int_dtype)); // bool(true)
    print "is float?: ".var_dump(is_float($int_dtype)); // bool(false)
    print "is not num?: ".var_dump(is_nan($int_dtype)); // bool(false)
    print "is num?: ".var_dump(is_numeric($float_dtype)); // bool(true)

    print "\n\nfloat\n";
    print "datatypes: ". var_dump($float_dtype); // float(12.5)
    print "is_float?: " .var_dump(is_float($float_dtype)); // bool(true)
    print "is not num?: " .var_dump(is_nan($float_dtype)); // bool(false) ;is_nan stands for not a number
    print "is num?: " .var_dump(is_numeric($float_dtype)); // bool(true)

    # cannot use is_nan function with non numbers, will raised error
    print "\n\nstring\n";
    print "datatypes: ".var_dump($string_dtype); // string(11) "hello world"
    print "is_string?: ".var_dump(is_string($string_dtype)); // bool(true)
    print "is_int?: ".var_dump(is_int($string_dtype)); // bool(true)
    #print "is not num?: ".var_dump(is_nan($string_dtype)); // bool(true)
    print "is num?: ".var_dump(is_numeric($string_dtype)); // bool(true)

    print "\n\nbool\n";
    print "datatypes?: ".var_dump($boolean_dtype); // bool(true)
    print "is_bool?: ".var_dump(is_bool($boolean_dtype)); // bool(true)

    print "\n\nnull\n";
    print "datatype?: ".var_dump($null_dtype); // NULL
    print "is_null?: ".var_dump(is_null($null_dtype)); // bool(true)

    print "\n\narray\n";
    print "datatype?: ";
    print var_dump($array_dtype); // array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
    print "is_array?: ";
    print var_dump(is_array($array_dtype)); // bool(true)

    print "\n\narray map\n";
    print "datatype?: ";
    $arr_map = array("a" => "is 1", "b" => "is 2", "c" => "is 3", "d" => "is 4", "e" => "is 5");
    print var_dump($arr_map); // array(5) { [a]=> string(3) "is 1" [b]=> string(3) "is 2" [c]=> string(3) "is 3" [d]=> string(3) "is 4" [e]=> string(3) "is 5" }
    print "is_array?: ";
    print var_dump(is_array($arr_map)); // bool(true)

    print "\ncasting data types\n";
    $int_str_num = "122364872";
    $float_str_num = "0.000289532424";
    $float_int_num = 0.000289532424;
    $int_float_num = 122364872;
    print var_dump((int)$float_dtype); // int(12)
    print var_dump((float)$int_dtype); // float(12)
    print var_dump((int)$int_str_num); // int(122364872)
    print var_dump((float)$float_str_num); // float(0.000289532424)
    print var_dump((int)$float_int_num); // float(0.000289532424)
    print var_dump((float)$int_float_num); // float(122364872)