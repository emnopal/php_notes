<?php
require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

// overriding static property
MathHelper::$name = "MathHelper";
echo MathHelper::$name . PHP_EOL;

// calling static method
$results = MathHelper::sum(1, 2, 3, 4, 5 ) . PHP_EOL;
echo "Results: $results"; // 15
