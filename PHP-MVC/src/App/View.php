<?php

namespace BelajarPhpMvc\Belajar\PHP\MVC\App;

class View{

    static function render($index, $model){
        require __DIR__."/../View/{$index}.php";
    }
}