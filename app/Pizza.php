<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizzas';

    //take an array for a value (for checkbox)
    protected $casts = [
        'toppings' => 'array'
    ];
}
