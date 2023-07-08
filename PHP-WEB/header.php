<?php

header("Application: Belajar PHP web");
header("Author: Farhan Yp");

$client = $_SERVER['HTTP_CLIENT_NAME']; 
echo "Hello $client";