<?php

class User{

    public ?Address $address;

}

// Cara mengecek null dengan menggunakan null safe
function getCountry(?User $user): ?string{
    return $user?->address?->country;
}

echo getCountry(null);
var_dump(0 == "");