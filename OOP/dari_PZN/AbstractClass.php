<?php

require_once "data/Location/Location.php";

use Data\Location\{Location, City, Country, Province};

try{
    // $location = new Location(); // PHP will ignore this error since there is try catch argument
    $city = new City();
    $province = new Province();
    $country = new Country();
    echo "Running Success!";
} catch (Error $e){ // catch Fatal Error
    echo "ERROR! cannot instantiate abstract class";
}

echo PHP_EOL;

try{
    $city = new City();
    $province = new Province();
    $country = new Country();
    echo "Running Success!";
} catch (Error $e){ // catch Fatal Error
    echo "error in: $e";
}