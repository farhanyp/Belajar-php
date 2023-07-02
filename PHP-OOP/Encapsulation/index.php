<?php

require_once "Encapsulation/class/Category.php";

$kiko = new Category();
$kiko->setName("Kiko");
echo $kiko->getName();

$kiko->setName("Pasta");
echo $kiko->getName();
