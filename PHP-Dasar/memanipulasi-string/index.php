<!-- Dot Operator -->
<?php

$name = "Farhan Yudha Pratama"; 

echo "Nama: ". $name . PHP_EOL; //PHP_EOL sama dengan \n

?>

<!-- Konversi -->
<?php
// Konversi dari integer ke string
$valueString = (string)100;
var_dump($valueString);
PHP_EOL;

// konversi string ke int
$valueInt = (int)"100";
var_dump($valueInt);
PHP_EOL;

// Konversi string ke float
$valueFloat = (float)"100.12";
var_dump($valueFloat);
PHP_EOL;
?>

<!-- Mengakses karakter -->
<?php
$name = "Farhan";
echo $name[0].$name[1].$name[2];
echo PHP_EOL;
?>

<!-- Variabel Parsing -->
<?php
$name = "Farhan";
echo "Nama: $name" . PHP_EOL;
?>

<!-- Curcly Brace -->
<?php
$name = "Farhan";
echo "Nama: {$name}s" . PHP_EOL;
?>
