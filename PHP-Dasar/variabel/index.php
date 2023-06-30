<!-- Variabel -->
<?php

$name = "Yp";
$age = 22;

var_dump($name);
var_dump($age);

echo "\n";

?>

<!-- Variabel Variabels -->
<!-- Menggunakan variabel dari value sebuah variabel -->
<?php

$name = "Yp";
$$name = 22;

echo $name;
echo "\n";
echo $Yp;
?>