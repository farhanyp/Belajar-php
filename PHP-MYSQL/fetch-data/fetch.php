<?php

require_once "get-connection/getConnection.php";

$connection = getConnection();

$sql = "Select * From admin";
echo "try".PHP_EOL;
$result = $connection->query($sql);

if($row = $result->fetch()){
    echo "Login Sukses".PHP_EOL;
}else{
    echo "Login Gagal".PHP_EOL;
}