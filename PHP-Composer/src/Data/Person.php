<?php 

namespace BelajarPhpComposer\Data;

class Person{

    public function __construct(private string $name){
    }

    public function sayHello(string $name){
        echo "Halo $name, nama saya $this->name";
    }
}

?>