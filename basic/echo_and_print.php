<?php

    # Declare variable
    $a = 12;
    $b = 14;

    # operate with variable
    $results = $a + $b;

    # Print statement
    echo $a + $b; // without appending to string
    echo "\nresults of $a + $b is $results"; // appending to string

    // appending to string with different way (with ,) doesn't work in print statement
    echo "\nresults of ", $a ," + " , $b ," is " , ($a + $b);

    // appending to string with different way (with .)
    echo "\nresults of ". $a ." + " . $b ." is " . ($a + $b);

    # php is not case sensitive
    Echo "\nresults of ", $a ," + " , $b ," is " , ($a + $b); // appending to string with different way (with ,)
    EcHo "\nresults of ", $a ," + " , $b ," is " , ($a + $b); // appending to string with different way (with ,)
    ECHO "\nresults of ", $a ," + " , $b ," is " , ($a + $b); // appending to string with different way (with ,)
    eChO "\nresults of ", $a ," + " , $b ," is " , ($a + $b); // appending to string with different way (with ,)

    # or you can use print instead of echo, "," -> doesn't support in print statement
    print "\nresults of ". $a ." + " . $b ." is " . ($a + $b); // appending to string with different way
    print "\nresults of $a + $b is $results\n"; // appending to string

    # append string
    $g = "Hello World";
    $h = "I will change the world";

    # concat string
    # customizable string
    print $g . " ". $h . "\n"; // Hello World I will change the world
    print $g . $h . "\n"; // Hello WorldI will change the world

    # append string
    # doesn't support more than two string
    print $g .= $h; // Hello WorldI will change the world