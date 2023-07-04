<?php

// Union Types, merupakan cara untuk mendeklarasikan variabel dengan multiple tipe data
class Example{
    
    public string | int | bool | array $data;

    public function sample(int|string $data): void{

        if(is_string($data)){
            echo "This is string".PHP_EOL;
        }else if(is_int($data)){
            echo "This is int".PHP_EOL;
        }
    }

    public function sample2(int|string $data): int|string
    {

        if(is_string($data)){
            return "This is string".PHP_EOL;
        }else if(is_int($data)){
            return $data;
        }
    }
}