<?php
require_once "function/class/Person.php";

$yp = new Person();
$yp -> name ="Yp";
$yp -> address = "Jauh";

echo "Name: {$yp -> name}".PHP_EOL;
echo "Alamat: {$yp -> address}".PHP_EOL;
echo "Negara: {$yp -> country}".PHP_EOL;
echo $yp -> sayHello("Yp");
