<?php

require_once "data/Category.php";

$objCat = new Category();
$objCat->setName("Phone");
$objCat->setExpensive(true);

echo $objCat->getName() .PHP_EOL;

// if use tenary operator, use print
$objCat->isExpensive() ? print "Expensive".PHP_EOL : print "Not Expensive".PHP_EOL;

// or if you want to use echo
echo $objCat->isExpensive() ? "Expensive". PHP_EOL : "Not Expensive". PHP_EOL;

// this will be error
try{
    $objCat = new Category();
    $objCat->setName("    "); // demonstrate how trim works, trim will ignore all white space
    $objCat->setExpensive(False);

    echo $objCat->getName() .PHP_EOL;

    // if use tenary operator, use print
    $objCat->isExpensive() ? print "Expensive".PHP_EOL : print "Not Expensive".PHP_EOL;

    // or if you want to use echo
    echo $objCat->isExpensive() ? "Expensive". PHP_EOL : "Not Expensive". PHP_EOL;
} catch (Error $e) {
    echo "See Category.php, there is no else for case" .' ""'. PHP_EOL;
}
