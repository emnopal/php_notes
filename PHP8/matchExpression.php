<?php

# structure control di PHP -> dulu cuma ada if switch if else, if else if else
# sekarang ada match expression: mirip switch case tapi lebih mudah dan cepat dan bisa mengembalikan value
# mirip sama ternary operator di if else => echo example($a) ? "true":"false";

# contoh pake switch case
$value = "E";
$result = "";

switch ($value){
    case "A":
    case "B":
    case "C":
        $result = "Passed";
        break;
    case "D":
        $result = "Not Passed";
        break;
    case "E":
        $result = "Try again";
        break;
    default:
        $result = "Value not valid";
        break;
}
echo $result . PHP_EOL;

# contoh pake match Expression

$value = "A";
$result = match ($value) {
    "A", "B", "C" => "Passed",
    "D" => "Not passed",
    "E" => "Try Again",
    default => "Value not valid"
};

echo $result . PHP_EOL;

# match expression bisa pake match expression
# beda dengan switch case yg hanya bisa = saja
# di match expression bisa selain = kaya > < != >= <= dsb

$value = 80;
$result = match (true) { # ganti jadi true khusus untuk boolean expresion spt comparison dsb
    $value >= 80  => "A",
    $value >= 60  => "B",
    $value >= 40  => "C",
    $value >= 30  => "D",
    $value >= 0   => "E",
    default => "Value not valid"
};

echo $result . PHP_EOL;


$name = "Mrs. Nani";
$result = match (true){
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
};
echo $result . PHP_EOL;