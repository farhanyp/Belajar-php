<?php

$path= "/index";
if(isset($_SERVER["PATH_INFO"])){
    $path = $_SERVER["PATH_INFO"];
    echo __DIR__.'/../src/View'.$path.'.php';
}

require __DIR__.'/../src/View'.$path.".php";