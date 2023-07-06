<?php

function getConnection(): PDO{

    $host = "localhost";
    $port = 3306;
    $database = "belajar_php_mysql";
    $username = "root";
    $password = "";

    return $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

var_dump(getConnection());
