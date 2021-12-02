<?php
    // all of include file in file4.php will be inherit to file5 with include
    // if you include file1.php, file2.php, file3.php but file4.php is included will be error
    include 'src/file4.php'; // namespace fab\fub
    use foo as feline; // with alias
    use bar as canine; // with alias
    use \fab\fub; // without alias \\ will be useful when there is nested namespace
    // use animate; -> useless
    echo feline\Cat::says(), "<br />\n";
    echo canine\Dog::says(), "<br />\n";
    echo \animate\Animal::breathes(), "<br />\n";
    echo animate\Animal::breathes(), "<br />\n"; // also works
    echo fub\test(); // accessing namespace function
?>