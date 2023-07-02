<?php

class Shape {
    
    public function getCorner(){
        return "ini function parents".PHP_EOL;
    }
}

class Triangle extends Shape{

    public function getCorner(){
        return "ini function dari child".PHP_EOL;
    }

    public function getParentCorner(){

        // Merefensi ke function milik parent
        return Parent::getCorner();
    }
}