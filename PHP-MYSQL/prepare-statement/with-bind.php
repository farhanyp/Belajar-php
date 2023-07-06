<?php

require_once "get-connection/getConnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "admin";

// Menggunakan prepare statement untuk mengatasi sql injection
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$success = false;
$find_user = null;

foreach($statement as $row){
    $success = true;
    $find_user = $row["username"];
}

if($success){
    echo "Login Berhasil: ".$find_user.PHP_EOL;
}else{
    echo "Login Gagal: ".$find_user.PHP_EOL;

}