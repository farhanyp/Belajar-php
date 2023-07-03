<?php

// Interface hanya bisa untuk class dan bisa juga mengimplenetasi kan implament lainnya tetapi tidak bisa mengimplement class

interface hasBrand{
   function getBrand(): string;
}

interface isMaintenance{
   function isMaintenance(): bool;
}

interface Car extends hasBrand{

    function drive(): void;

    function getTire(): Int;
}

class Avanza implements Car, isMaintenance{
     function drive(): void{
        echo "Drive Avanza".PHP_EOL;
     }   

     function getTire(): int{
        return 4;
     }

     function getBrand(): string{
      return "Toyota";
     }

     function isMaintenance(): bool{
      return true;
     }
}