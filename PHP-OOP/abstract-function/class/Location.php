<?php

// Class Abstrak tidak bisa dijadikan object, hanya bisa di inisiasi layaknya seperti blueprints

abstract class Location{

    // Abstrak kelas tidak boleh diberikan body atau logic, jika diberikan akan terjadi error
    abstract public function locationZ(): void;

}

class City extends Location{
    public function locationZ(): void
    {
        echo "Location Z of city";
    }
}
class Country extends Location{
    public function locationZ(): void
    {
        echo "Location Z of city";
    }
}