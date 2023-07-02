<?php
require_once "namespace/class/Person.php";
require_once "namespace/function/function.php";

// Memanggil class didalam namespace harus menggunakan namespace-nya juga

$yp = New Data\One\Person();
$farhan = New \Data\Two\Person();

// Memanggil function dan const didalam namespace harus menggunakan namespace-nya juga
Data\Hello();
echo Data\APP;


// Tambahan: sebenarnya jika kita semua script yang kita buat itu ada otomatis masuk kedalam namespace global, tetapi tidak wajib untuk mendeklarasikannya. Contoh:

/*
namespace{
    // COdingan mu
} 
*/