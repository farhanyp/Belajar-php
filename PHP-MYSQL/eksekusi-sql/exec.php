<?php

require_once "get-connection/getConnection.php";

$connection = getConnection();

// Insert Data ke customer
$sql = <<<SQL
INSERT INTO customer(id,name,email)
VALUES ("yp1",'Yp1',"yp1@gmail.com")
SQL;

$connection->exec($sql);

$connection = null;