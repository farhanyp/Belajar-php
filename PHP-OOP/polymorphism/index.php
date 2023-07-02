<?php

require_once "polymorphism/class/Programmer.php";

// polymorphism dari class
$company = new Company();
$company->programmer = new Programmer("Yp");
var_dump($company->programmer);

$company->programmer = new BackEndProgrammer("Yp Backend");
var_dump($company->programmer);

$company->programmer = new FrontEndProgrammer("Yp Front");
var_dump($company->programmer);


// Polymorphism dari function
$company -> sayHelloProgrammer(new Programmer("Yp"));
$company -> sayHelloProgrammer(new Programmer("Yp Backend"));
$company -> sayHelloProgrammer(new Programmer("Yp Frontend"));
