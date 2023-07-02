<?php

require_once "visibilty/class/Product.php";

// tidak bisa mengakses visibility private dan protected
$kiko = new Kiko("Kiko", 200,"YAMAHA");
// echo $kiko -> brand;
// echo $kiko -> name;
// echo $kiko -> price;