<?php

// Constructor Property Promotion, merupakan cara untuk menjadikan constructor langsung jadi property
class Product{

    public function __construct(public string $id,
                                public string $name,
                                public int $price = 0,
                                public int $quantity = 0,
                                public bool $expenseive = false)
{}

}