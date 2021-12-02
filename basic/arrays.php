<?php

    # array list
    $arr = array(1,2,3,4,5);
    print_r($arr); // array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
    # print $arr; -> will be error: array to string conversion

    /* count array elements  */ print count($arr) ."\n"; // 5

    # print array elements
    print $arr[0] ."\n"; // 1
    print $arr[1] ."\n"; // 2
    # ...

    # if you want to print array, you can use print_r() or use loop

    # for loop
    for ($i=0; $i < count($arr); $i++) {
        print $arr[$i];
    }

    print " ";
    # for each loop
    foreach ($arr as $value) {
        print $value;
    }

    print " ";
    # while loop
    $i = 0;
    while ($i < count($arr)) {
        print $arr[$i];
        $i++;
    }

    print " ";
    # do while loop
    $i = 0;
    do {
        print $arr[$i];
        $i++;
    } while ($i < count($arr));


    print " ";
    # array map
    $arr_map = array("a" => "is 1", "b" => "is 2", "c" => "is 3", "d" => "is 4", "e" => "is 5");
    print $arr_map["a"] ." "; // 1
    print $arr_map["b"] ." "; // 2
    print $arr_map["c"] ." "; // 3

    print "\n";
    print_r($arr_map);

    # for loop
    # cannot use for loop, do loop, while loop with array map
    # print key value
    foreach ($arr_map as $key => $value) {
        print $key ." ";
        if ($value == "is 5") {
            print $value .". ";
        }
        else {
            print $value .", ";
        }
    } # a is 1, b is 2, c is 3, d is 4, e is 5.

    print " ";
    # print only key
    foreach ($arr_map as $key => $value) {
        if ($key == "e") {
            print $key .". ";
        }
        else {
            print $key .", ";
        }
    } # a, b, c, d, e.

    print " ";
    # print only value
    foreach ($arr_map as $value) {
        if ($value == "is 5") {
            print $value .". ";
        }
        else {
            print $value .", ";
        }
    } # is 1, is 2, is 3, is 4, is 5.

    print "\n";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    $age['Pan'] = "35";
    $age['Sam'] = "37";
    $age['Jilly'] = "43";
    print_r($age);
    echo "Peter is " . $age['Peter'] . " years old.";

    print "\n";
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "\n";
    }

    # Multidimensional array
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );

    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".\n";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".\n";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".\n";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".\n";

    echo "\n";
    for ($row = 0; $row < 4; $row++) {
        echo "Row number $row: ";
        for ($col = 0; $col < 3; $col++) {
            echo " ".$cars[$row][$col];
        }
        echo "\n";
    }

    # sort array
    $numbers = array(4, 6, 2, 22, 11);
    echo "before sort: \n";
    print_r($numbers); // array(5) { [0]=> int(4) [1]=> int(6) [2]=> int(2) [3]=> int(22) [4]=> int(11) }

    echo "after sort: \n";
    sort($numbers);
    print_r($numbers); // array(5) { [0]=> int(2) [1]=> int(4) [2]=> int(6) [3]=> int(11) [4]=> int(22) }

    # sort descending
    $numbers = array(4, 6, 2, 22, 11);
    echo "after descending sort: \n";
    rsort($numbers);
    print_r($numbers); // array(5) { [0]=> int(22) [1]=> int(11) [2]=> int(6) [3]=> int(4) [4]=> int(2) }

    # sort ascending
    $numbers = array(4, 6, 2, 22, 11);
    echo "after ascending sort: \n";
    asort($numbers);
    print_r($numbers); // array(5) { [0]=> int(2) [1]=> int(4) [2]=> int(6) [3]=> int(11) [4]=> int(22) }

    # sort array of string
    $cars = array("Volvo", "BMW", "Toyota");
    echo "before sort: \n";
    print_r($cars); // array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(7) "Toyota" }

    # sort
    echo "after sort: \n";
    sort($cars);
    print_r($cars); // array(3) { [0]=> string(3) "BMW" [1]=> string(5) "Toyota" [2]=> string(5) "Volvo" }

    # sort descending
    $cars = array("Volvo", "BMW", "Toyota");
    echo "after descending sort: \n";
    rsort($cars);
    print_r($cars); // array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "Toyota" [2]=> string(5) "BMW" }

    # sort ascending
    $cars = array("Volvo", "BMW", "Toyota");
    echo "after ascending sort: \n";
    asort($cars);
    print_r($cars); // array(3) { [0]=> string(3) "BMW" [1]=> string(5) "Toyota" [2]=> string(5) "Volvo" }

    # sort array map
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "before sort: \n";
    print_r($age); // array(3) { [Peter]=> 35 [Ben]=> 37 [Joe]=> 43 }

    echo "after ascending key sort: \n";
    ksort($age);
    print_r($age); // array(3) { [Ben]=> 37 [Joe]=> 43 [Peter]=> 35 }

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "after ascending value sort: \n";
    asort($age);
    print_r($age); // array(3) { [Peter]=> 35 [Ben]=> 37 [Joe]=> 43 }

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "after descending key sort: \n";
    krsort($age);
    print_r($age); // array(3) { [Peter]=> 35 [Joe]=> 43 [Ben]=> 37 }

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "after descending value sort: \n";
    arsort($age);
    print_r($age); // array(3) { [Joe]=> 43 [Ben]=> 37 [Peter]=> 35 }
