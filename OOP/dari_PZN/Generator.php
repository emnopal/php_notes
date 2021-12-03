<?php

function getEven(int $max): Iterator{
    $array = [];
    for ($i = 0; $i < $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

foreach (getEven(100) as $item) {
    echo $item . PHP_EOL;
}

function getOdd(int $max): Iterator{
    $array = [];
    for ($i = 0; $i < $max; $i++) {
        if ($i % 2 != 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

foreach (getOdd(100) as $item) {
    echo $item . PHP_EOL;
}