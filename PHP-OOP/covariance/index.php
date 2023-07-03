<?php 

require_once "covariance/class/Animal.php";
require_once "covariance/class/AnimalShelter.php";

// Covariant ialah perilaku dimana menarget fungsi sesuai dengan yang dibutuhkan
$catShelter = new CatShelter();
$catShelter->adopt("Tupperware");

$dogShelter = new DogShelter();
$dogShelter->adopt("Laptop");