<?php


/*
Function baru buat manipulasi string
1. str_contains($string, $contains):bool
2. str_starts_with($string, $value):bool
2. str_ends_with($string, $value):bool
*/

$str = "Hello World";
$str2 = "Bye World";
$str3 = "Bye Hell";

#1
echo str_contains($str, "Hello") ? "Hello" .PHP_EOL: "Not Contains Hello" .PHP_EOL;
echo str_contains($str2, "Hello") ? "Hello" .PHP_EOL: "Not Contains Hello" .PHP_EOL;

#2
echo str_starts_with($str, "Hello") ? "Hello" .PHP_EOL: "Not Starts with Hello" .PHP_EOL;
echo str_starts_with($str2, "Hello") ? "Hello" .PHP_EOL: "Not Starts with Hello" .PHP_EOL;

#2
echo str_ends_with($str, "World") ? "World" .PHP_EOL: "Not Ends with Hello" .PHP_EOL;
echo str_ends_with($str3, "World") ? "World" .PHP_EOL: "Not Ends with Hello" .PHP_EOL;