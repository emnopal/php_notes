<?php

# union types, kita bisa menulis tipe data gabungan yg sudah di definisikan
# pada parameter property, parameter, arguments, atau return
# mirip dengan def func(a: Union[str, int]=None)-> Union[str, int]: pada python

class ExampleUnion{
    public int|string|bool $isOkay;
}

$testing = new ExampleUnion();
$testing->isOkay = "okay";
$testing->isOkay = true;
$testing->isOkay = 123;
# $testing->isOkay = [123]; -> error karena gaada tipe data array
# okay no error!


# contoh di argument

function UnionFuncExample(int|string|float $nums): int|string|float{ # contoh parameter return
    return $nums;
}


# kalo mau pake tipe data gabungan semuanya bisa pake mixed
# mixed itu gabungan dari semua union tipe data

