<?php

function sayHello(string $firstname, string $middlename, string $lastname):void {
    echo "Hello {$firstname} {$middlename} {$lastname}".PHP_EOL;

}

// Tanpa Named Argument
sayHello("Farhan","Yudha","Pratama");

// Contoh menggunakan Named Argument, tidak perlu mengirim argument secara berurutan
sayHello(lastname:"Pratama", middlename: "Yudha", firstname:"Farhan");

