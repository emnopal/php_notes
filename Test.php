<?php

$a = [1,2,3,4];
$b = [2,3,4,5];

$result = array_map(fn($a, $b) => $a + $b, $a, $b);

var_dump($result);

echo PHP_EOL;

function isAnagram(?string $a, ?string $b): bool {

    $a = strtolower($a); $a = str_split($a); sort($a);
    $b = strtolower($b); $b = str_split($b); sort($b);
    return $a === $b;

}

var_dump(isAnagram('silent', 'listen'));
var_dump(isAnagram('race', 'care'));
var_dump(isAnagram('triangle', 'INTEGRAL'));
var_dump(isAnagram('triangle', ' '));
var_dump(isAnagram('ba', 'bi'));
var_dump(isAnagram("null", "nill"));
var_dump(isAnagram(null, null));
var_dump(isAnagram("", ""));

echo PHP_EOL;


function isPalindrome(?string $str): bool {

    // return strtolower($str) === strrev(strtolower($str)); // one liner

    // From scratch
    $str = strtolower($str);
    $str = str_split($str);
    $str_reverse = [];
    for ($i = count($str)-1; $i >= 0; $i--){
        $str_reverse[] = $str[$i];
    }

    return $str === $str_reverse;

}

var_dump(isPalindrome('racecar'));
var_dump(isPalindrome('but'));
var_dump(isPalindrome(''));
var_dump(isPalindrome(' '));
var_dump(isPalindrome(null));
var_dump(isPalindrome('212'));
var_dump(isPalindrome('112'));