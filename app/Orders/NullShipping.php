<?php

namespace App\Orders;

class NullShipping
{
    public function price()
    {
        return 0;
    }
}
