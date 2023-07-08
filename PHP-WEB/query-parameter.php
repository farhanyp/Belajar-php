<?php
$hello = "Hello ".$_GET["firstname"]." ".$_GET["lastname"];
$numbers = $_GET["number"];
$total = 0;

foreach($numbers as $number){
    $total += $number;
}
// Semua query parameter bakal di letak di $_GET

?>

<html>
    <head>
        <title>Query Parameter</title>
    </head>
    <body>
        <h1><?= $hello?></h1>
        <h1>Number: <?= $total?></h1>
    </body>
</html>