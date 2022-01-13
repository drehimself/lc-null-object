<?php

namespace App\Orders;

use App\Orders\NullShipping;

class Order
{
    public $items;
    public $shipping;

    public function __construct($items)
    {
        $this->items = $items;
        $this->shipping = new NullShipping();
    }

    public function applyShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    public function grossTotal()
    {
        return $this->items->sum('price');
    }

    public function total()
    {
        return $this->grossTotal() + $this->shipping();
    }

    public function shipping()
    {
        return $this->shipping->price();
    }
}
