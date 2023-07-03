<?php

// DateTime(), untuk melihat waktu sekarang
$date = new DateTime();

// Mengubah Time Zone
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));

// Untuk mengubah date dan time 
// $date->setDate(2023,7,3);
// $date->setTime(12,12,12);

// untuk menambah waktu
$date->add(new DateInterval("P1Y"));

// Untuk memunduri waktu jika ingin menambah
$dateInterval = (new DateInterval("P1Y"));
$dateInterval->invert = -1;
$date->add($dateInterval);

// Untuk mengubah format
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));


var_dump($date);