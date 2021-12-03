<?php

require_once "data/Shape/Shape.php";

use Data\Shape\{Shape, Rectangle, Triangle};

// Parent class
$shape = new Shape();

// Child class
$rectangle = new Rectangle();
$triangle = new Triangle();

echo $shape->getCorner() .PHP_EOL; // -1
echo $rectangle->getCorner() .PHP_EOL; // 4
echo $rectangle->getParentCorner() .PHP_EOL; // -1
echo $triangle->getCorner() .PHP_EOL; // 3
echo $triangle->getParentCorner() .PHP_EOL; // -1
