<?php

class MathHelper{

    static public string $name = "MathHelper".PHP_EOL;

    static public function sum(int ...$number): int{
        $total = 0;

        foreach($number as $num){
            $total += $num;
        }

        return $total;
    }
}