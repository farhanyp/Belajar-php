<?php

// Interface hanya bisa untuk class dan bisa juga mengimplenetasi kan implament lainnya tetapi tidak bisa mengimplement class
interface Car{

    function drive(): void;

    function getTire(): Int;
}

class Avanza implements Car{
     function drive(): void{
        echo "Drive Avanza".PHP_EOL;
     }

     function getTire(): int{
        return 4;
     }
}