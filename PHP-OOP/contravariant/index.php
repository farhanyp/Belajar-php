<?php 

require_once "contravariant/class/Animal.php";
require_once "contravariant/class/AnimalShelter.php";
require_once "contravariant/class/Food.php";

// Covariant ialah perilaku dimana menarget fungsi sesuai dengan yang dibutuhkan
$catShelter = new CatShelter();
$cat = $catShelter->adopt("Tupperware");
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Laptop");
$dog->eat(new Food());