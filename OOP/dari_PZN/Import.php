<?php

require_once "data/Conflict.php";
require_once "data/Helper/Helper.php";

// this is will make a conflict
// because there are 2 same name of class
// use Data\One\Conflict;
// use Data\Two\Conflict;

// use alias to solve this problem
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Data\Helper\helpMe; // to import function
use const Data\Helper\APPLICATION; // to import constant

/*
    Using alias in function and const import
    to reduce long filename or function
    use function Data\Helper\helpMe as help;
    use const Data\Helper\APPLICATION as APP;
*/

/*
    Importing the group of class
    use Data\One\{Conflict as Conflict1, Dummy, Sample};
    use Data\Two\{Conflict as Conflict2};
*/

$conflict1 = new Conflict1();
// make conflict
// $conflict2 = new Conflict();
// solve conflict
$conflict2 = new Conflict2();

/*
    Or instead using alias you can use this
    use Data\One\Conflict;
    // do not import same class in use statement unless using alias statement

    $conflict1 = new Conflict();
    $conflict2 = new Data\Two\Conflict();
 */

helpMe();

echo APPLICATION . PHP_EOL;
