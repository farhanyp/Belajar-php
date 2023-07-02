<?php
require_once "inheritance/class/Manager.php";

// Memanggil class yang memiliki constructor
$yp = new Manager("Yp");
echo $yp->name.PHP_EOL;

$farhan = new VicePresident("Farhan");
echo $farhan ->name.PHP_EOL;

