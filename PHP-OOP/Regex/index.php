<?php

// Cek apakah mengandung kata yang dicari

$mathces = [];
$result = preg_match_all("/han|dha/i", "Farhan Yudha Pratama", $mathces);

var_dump($result);
var_dump($mathces);
?>


<?php
// Mereplace kata

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, bangsat");
var_dump($result);
?>

<?php
// Memisah kata

$result = preg_split("/[\s,-]/i", "Farhan Yudha Prat-ama");
var_dump($result);
?>