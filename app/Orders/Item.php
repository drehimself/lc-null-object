<?php

namespace App\Orders;

class Item
{
    public $price;

    public function __construct($price)
    {
        $this->price = $price;
    }
}
