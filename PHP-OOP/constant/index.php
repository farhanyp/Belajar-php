<?php
require_once "constant/class/Person.php";

// membuat constanta dengan mengunakan const vs define
define("APP", "PHP 1.0.0");
const app = "PHP 2.0.0";
echo APP.PHP_EOL;
echo app.PHP_EOL;

// memanggil const didalam class
echo Person::VERSION.PHP_EOL;

// memanggil function yang isinya ada const didalam class
$person = new Person();
echo $person -> info();
