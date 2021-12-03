<?php

require_once "exceptions/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$requests = new LoginRequest();
$requests->username = "Saya";
$requests->password = "123";

ValidationUtil::validate($requests); // this is assign only to LoginRequest class
ValidationUtil::validateReflection($requests); // this is not assign to specific class

class RegisterUserRequest{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Joko";
$register->address = "Solo";
$register->email = "joko@gmail.com";

ValidationUtil::validateReflection($register);  // this is not assign to specific class,
                                                // so it can check any class that have same characteristics

// if you run this, will get error, due to $register not belong to LoginRequest class
// ValidationUtil::validate($register); // this is assign only to LoginRequest class


