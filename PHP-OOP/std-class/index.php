<?php

$array = [
    "firstname" => "Farhan",
    "middlename" => "Yudha",
    "lastname" => "Pratama"
];
var_dump($array);

// Mengkonversi array ke object dengan stdclass
$object = (object) $array;
var_dump($object);

// Mengkonversi array ke object dengan stdclass
$array = (array) $object;
var_dump($array);