<?php

require_once "get-connection/getConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

// Menggunakan prepare statement untuk mengatasi sql injection
// tanda ? diawal merukan referensi 1 dan bertambah seterusnya
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

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