<?php

$values = array(1,2,3,4);
// Akses data di array
var_dump($values[0]);

// Mengubah data pada aray
$values[2] = 5;
var_dump($values[2]);

// Menambah data pada array
$array[] = 6;
var_dump($values[3]);

// Menghapus data pada array
unset($array[0]);

// Mengambil total data array
count($array);

?>


<?php

$eko = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30
);

?>

<?php
$eko = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
);
?>