<?php

require_once "get-connection/getConnection.php";

$connection = getConnection();

// Menggunakan query sangat berbahaya karena bisa terkena sql injection
// Contohnya menggunakan admin';#
// $username = "admin';#"; // contoh menggunakan sql injection
$username = "admin";
$password = "admin";
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';";
echo $sql.PHP_EOL;
$statement = $connection->query($sql);


// Bisa juga mengatasi sql injection dengan menggunakan perintah $connection->quote($sql), tetapi tidak disarankan
// Contoh
/*
$username = $connection->quote("admin");
$password =  $connection->quote("admin");
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password;";
echo $sql.PHP_EOL;

$statement = $connection->query($sql);
*/

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