<!-- Operator Array -->
<?php

$a= array("a","b");
$b= array("a","b");

// Menggabungkan Array
var_dump($a + $b);

// True jika memiliki value yang sama
var_dump($a == $b);

// True jika memiliki value dan posisi yang sama
var_dump($a === $b);

// True jika a dan b tidak sama
var_dump($a != $b);

// True jika a dan b tidak sama
var_dump($a <> $b);

// True jika a dan b tidak sama dan posisi tidak sama
var_dump($a !== $b);

?>