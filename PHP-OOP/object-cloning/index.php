<?php

require_once "object-cloning/class/Student.php";

$student1 = new Student();
$student1 -> id = "1";
$student1 -> name = "Farhan";
$student1 -> value = 100;
$student1 -> setSample("AAA");

var_dump($student1);

// Mengclone dari $student1 dan dimasukan ke $student2
$student2 = clone $student1;

var_dump($student2);