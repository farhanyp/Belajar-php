<?php

// Membuat Class
class Person{
    // Membuat Class, menambahkan types declaration, menentukan default value dan nullable
    var string $name;
    var ?string $address;
    var string $country = "indonesia";

    function sayHello (string $name): string{

        return "Hello {$name}";
    }
}