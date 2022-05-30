<?php

require "src/Customer.php";
require "src/Product.php";

// single namespace
// use namespace\namespace\namespace\...\ClassName;
// use \Store\Model\Customer; -> single namespace

// multiple namespace
// use namespace\namespace\namespace\...\{ClassName1, ClassName2, ...};
use Store\Model\{Customer, Product};

/*
Not a best practice
$customer = new \Store\Model\Customer("John Doe");
echo $customer->getName();
*/

// best practice
$customer = new Customer("John Doe");
echo $customer->getName() . PHP_EOL;

$product = new Product("Laptop");
echo $product->getProductName();