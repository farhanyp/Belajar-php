<?php

require_once 'vendor/autoload.php';

use BelajarPhpComposer\Data\Person;

$people = new Person("Yp");

echo $people->sayHello("Maman").PHP_EOL;
