<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_mysql";
$username = "root";
$password = "";

// Menggunakan try pada konekti database yang berfungsi untuk menangkap jika terjadi error

try{
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi dengan database";
}catch(PDOException $exception){
    echo "Gagal terkoneksi ke database mysql: ".$exception->getMessage().PHP_EOL;
}