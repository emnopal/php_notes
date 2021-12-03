<?php

namespace {

    require_once "data/Conflict.php";
    require_once "data/Helper/Helper.php";

    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();

    echo Data\Helper\APPLICATION . PHP_EOL;

    Data\Helper\helpMe();

}
