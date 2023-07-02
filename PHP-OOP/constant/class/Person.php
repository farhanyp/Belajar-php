<?php

// Membuat Class
class Person{

    const VERSION = "farhan yp";

    // Membuat Class, menambahkan types declaration, menentukan default value dan nullable
    var string $name;
    var ?string $address;
    var string $country = "indonesia";

    function sayHello (?string $name): string{

        if(is_null($name)){
            return "My name is {$this->$name}";
        }else{
            return "Hello {$name}, my name is {$this->name}";
        }
    }

    // Memanggil didalam class itu sendiri dan diletakan didalam method atau function
    function info(){
        return self::VERSION;
    }
}