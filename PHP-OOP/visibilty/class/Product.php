<?php

class Product {

    public string $name;
    protected int $price;
    private string $brand;
    
}

class Kiko extends Product{

    function info(){
        // Tidak bisa mengakses $brand dikarenakan $brand memiliki visibilty private
        // echo "Brand: {$this->brand}".PHP_EOL;

        // Bisa mengakses $price dikarenakan $price memiliki visibility protected, tetapi tidak bisa di akses diluar dari class child dan parent
        echo "Brand: {$this->price}".PHP_EOL;

        // Bisa mengakses $name dikarenakan $name memiliki visibility public
        echo "name: {$this->name}".PHP_EOL;
    }
}