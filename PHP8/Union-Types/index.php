<?php

require_once "Union-Types/class/Example.php";

$pasta = new Example();
$pasta->data = "example";
$pasta->data = 200;
$pasta->data = true;
$pasta->data = [];
var_dump($pasta);

$pasta->sample("20");
echo $pasta->sample2(20);
