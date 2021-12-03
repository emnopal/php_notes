<?php namespace Helper;

/*
    ... namanya ellipsis
    fungsinya mirip args di python
    nama operatornya splat operator
    ada 2 kegunaan ellipsis di PHP,
        1. Packing Array
        2. Unpacking Array

    contoh:
    function sum(...$numbers) {
        $acc=0;
        foreach ($numbers as $number) {
            $acc += $number;
        }
        return $acc;
    }

    kalo kita pass argument ke sum()
    dia bakal jadi gini

    echo sum(1,2,3,4,5); // 15

    atau unpack array
    $arr = [1,2,3,4,5];
    echo sum(...$arr); // 15


    function echoTwo ($one, $two) {
        echo "$one\n$two";
    }

    $steaks = array('ribeye', 'kc strip', 't-bone', 'sirloin', 'chuck');

    // array_slice returns an array, but ellipsis unpacks it into function arguments
    echoTwo(...array_slice($steaks, -2)); // return last two elements in array

    > sirloin
    > chuck
 */

class MathHelper{
    public static string $name = "MathHelperClass";
    public static function sum(int...$numbers): int {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}