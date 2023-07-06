<?php

require_once "get-connection/getConnection.php";

$connection = getConnection();

$connection->exec("INSERT INTO comments(email,comment) VALUES('Yp@gmail.com','hi')");
$id = $connection->lastInsertId();

var_dump($id);