<?php

class Manager {
    public string $name;
    public string $title;

    public function __construct(string $name, string $title){
        $this->name = $name;
        $this->title = $title;
    }

    public function sayHello(string $name){
        echo "hallo {$name}, nama saya {$this->name}".PHP_EOL;
    }
}

class VicePresident extends Manager{

    public function __construct(string $name){
        // Menggunakan construct dari parent
        parent::__construct($name, "VP");

    }

    public function sayHello(string $name){
        echo "hallo {$name}, nama saya {$this->name}".PHP_EOL;
    }

}