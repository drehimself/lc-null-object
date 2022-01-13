<?php

namespace App\Models;

class NullDeveloper extends User
{
    protected $attributes = [
        'name' => 'No Developer assigned',
        'email' => 'nouser@nouser.com',
    ];
}
