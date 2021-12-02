<?php

    namespace fab\fub {
        function test() {
            echo "test";
        }
    }
    // call other php file
    namespace other\fab\fub{
        include 'file1.php';
        include 'file2.php';
        include 'file3.php';
        use foo as feline; // with alias
        use bar as canine; // with alias
        use animate; // without alias
        echo feline\Cat::says(), "<br />\n";
        echo canine\Dog::says(), "<br />\n";
        echo animate\Animal::breathes(), "<br />\n";
    }
    ?>