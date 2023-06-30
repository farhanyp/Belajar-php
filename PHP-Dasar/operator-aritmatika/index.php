<!-- Operator Aritmatika -->
<?php

$total = 10;
var_dump(+$total);
var_dump(-$total);

echo $total + $total;
echo "\n";
echo $total - $total;
echo "\n";
echo $total * $total;
echo "\n";
echo $total / $total;
echo "\n";

?>

<!-- Operator Penugasan -->

<?php
$total = 0;
$a = 10;
$b = 10;

$total += $a;
echo $total;

$total -= $a;
echo $total;

$total *= $a;
echo $total;

$total /= $a;
echo $total;

$total %= $a;
echo $total;