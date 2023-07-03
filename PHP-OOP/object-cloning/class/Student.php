<?php

class Student{

    public string $id;
    public string $name;
    public int $value;
    public string $sample;

    public function __clone(){
        unset($this->sample);
    }

    public function setSample(string $sample){
        $this->sample = $sample;
    }
}