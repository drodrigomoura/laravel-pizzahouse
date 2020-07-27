<?php

namespace App\Pizzas;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $casts = [
        'name',
        'type',
        'base',
        'toppings' => 'array'
    ];
}
