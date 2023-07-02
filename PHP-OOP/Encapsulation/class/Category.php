<?php

class Category {

    // Encapsulation yaitu metode untuk menjaga properties tetap aman
    private string $name;
    private int $price;
    
    public function getName(){
        return $this->name.PHP_EOL;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice(int $price){
        $this->price = $price;
    }
}