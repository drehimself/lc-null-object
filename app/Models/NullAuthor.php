<?php

namespace App\Models;

class NullAuthor extends User
{
    protected $attributes = [
        'name' => 'No Author',
        'email' => 'nouser@nouser.com',
    ];
}
