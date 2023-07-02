<?php

class Manager {
    
    var string $name;

    function __construct(string $name) {
        $this->name = $name;
    }
}

class VicePresident extends Manager{

}