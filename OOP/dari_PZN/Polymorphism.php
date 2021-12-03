<?php

require_once "data/Programmer.php";

// company punya banyak bentuk

$company = new Company();
$company->programmer = new Programmer("Joko");
var_dump($company);

$company->programmer = new BackendProgrammer("Joko");
var_dump($company);

$company->programmer = new FrontendProgrammer("Joko");
var_dump($company);

$company->programmer = new MachineLearningEnginner("Joko");
var_dump($company);

sayHelloProgrammer(new Programmer("Joko"));
sayHelloProgrammer(new BackendProgrammer("Joko"));
sayHelloProgrammer(new FrontendProgrammer("Joko"));
sayHelloProgrammer(new MachineLearningEnginner("Joko"));