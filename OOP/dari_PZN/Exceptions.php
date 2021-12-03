<?php

require_once 'exceptions/ValidationException.php';
require_once 'data/LoginRequest.php';
require_once 'helper/Validation.php';

// example of error
$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try { // if valid will continue execute
    validateLoginRequest($loginRequest);
    echo "is Valid". PHP_EOL;
} catch (ValidationException | Exception $e){ // raise exception when error occurs
    echo "Login Error, Error Msg: {$e->getMessage()}". PHP_EOL;
    var_dump($e->getTrace());
    echo "to String exception: " .$e->getTraceAsString() . PHP_EOL;
} finally {
    echo "neither error or not, still executed!" . PHP_EOL;
}

// example of valid
$newloginRequest = new LoginRequest();
$newloginRequest->username = "Admin";
$newloginRequest->password = "admin123";

try { // if valid will continue execute
    validateLoginRequest($newloginRequest);
    echo "is Valid". PHP_EOL;
} catch (ValidationException | Exception $e){ // raise exception when error occurs
    echo "Login Error, Error Msg: {$e->getMessage()}". PHP_EOL;
    var_dump($e->getTrace());
    echo "to String exception: " .$e->getTraceAsString() . PHP_EOL;
} finally {
    echo "neither error or not, still executed!" . PHP_EOL;
}