<?php

$a = 1;
$b = 2;
$c = "1";
$d = "2";

// Cek tetapi tidak melihat tipe data
var_dump($a == $c);

// Cek tetapi melihat tipe data
var_dump($a === $c);

// Cek tetapi tidak melihat tipe data
var_dump($a != $d);

// Cek tetapi tidak tipe data
var_dump($a <> $d);

// Cek tetapi melihat tipe data
var_dump($a !== $c);

// Cek apakah lebih kecil
var_dump($a < $b);

// Cek apakah lebih kecil sama dengan
var_dump($a <= $b);

// Cek apakah lebih besar
var_dump($a > $b);

// Cek apakah lebih besar sama dengan
var_dump($a >= $b);