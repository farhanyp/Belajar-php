<?php

require_once "get-connection/getConnection.php";

$connection = getConnection();

$sql = "Select * From customer";
echo "try".PHP_EOL;
$result = $connection->query($sql);
$customers = $result->fetchAll();

var_dump($customers);