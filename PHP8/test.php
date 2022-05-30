<?php
$result = 0;

for ($i = 0; $i < 100000000; $i++){
    $result += $i*2*$i+$i;
}

echo $result;
