<?php

require_once "get-connection/getConnection.php";

$connection = getConnection();
$connection->beginTransaction(); // Untuk memulia Transaction

$connection->exec("INSERT INTO comments(email,comment) VALUES('Yp@gmail.com','hi')");
$connection->exec("INSERT INTO comments(email,comment) VALUES('Yp@gmail.com','hi')");
$connection->exec("INSERT INTO comments(email,comment) VALUES('Yp@gmail.com','hi')");

$connection->rollBack(); //Untuk membatalkan transaction 
// $connection->commit(); // Untuk mengcommit Transaction
$connection=null;