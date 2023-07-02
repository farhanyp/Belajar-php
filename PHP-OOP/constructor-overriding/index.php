<?php

require_once "constructor-overriding/class/Manager.php";

$manager = new Manager("Yp", "Manager");
$manager->sayHello("Budi");

$vp = new VicePresident("Farhan");
$vp->sayHello("Ajeng");
echo $vp->title;