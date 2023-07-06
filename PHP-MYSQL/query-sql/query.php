<?php

require_once "get-connection/getConnection.php";

$connection = getConnection();

// cara mengambil return dari query SELEC
$sql = "SELECT id,name,email FROM customer";
$result = $connection->query($sql);

foreach($result as $row){
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "id: {$id}, name: {$name}, email: {$email}".PHP_EOL;
}

$connection = null;