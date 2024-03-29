<?php

# php 7 kebawah
function sayHello(?string $name){

    if ($name == null) {
        throw new Exception("Tidak boleh null");
    }

    echo "Hello $name" . PHP_EOL;

}

# php 8 keatas
function sayHelloExpression(?string $name)
{
    $result = $name != null ? "Hello $name" : throw new Exception("Tidak boleh null");
    echo $result . PHP_EOL;
}

sayHelloExpression("Eko");
sayHelloExpression(null);