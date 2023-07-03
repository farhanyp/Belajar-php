<?php

require_once "object-cloning/class/Student.php";

$student1 = new Student();
$student1 -> id = "1";
$student1 -> name = "Farhan";
$student1 -> value = 100;
// $student1 -> setSample("AAA");

// Mengclone dari $student1 dan dimasukan ke $student2
$student2 = clone $student1;

// membandingkan properti apakah sama atau tidak
var_dump($student1 == $student2);

// membandingkan apakah di memory yang sama atau tidak
var_dump($student1 === $student2);