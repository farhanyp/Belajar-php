<!-- Tipe data NULL -->
<?php

$name = "yp";
echo "tipe data:", $name;
echo "\n";
var_dump(is_null($name));

// name set null
$name = null;
echo "tipe data:";
echo $name;
var_dump(is_null($name));
echo "\n";
?>


<!-- menggunakan isset dan unset -->
<?php

//unset, untuk menghapus suatu variabel
$name = "yp";
unset($name);
//var_dump(is_null($name)); // Pasti Error

//isset, untuk mengecek suatu variabel ada isinya atau tidak
$name = "yp";
$name = null;
isset($name);
var_dump($name);
?>
