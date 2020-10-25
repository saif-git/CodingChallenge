<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'name', 'email', 'postal_codes','sales_aria'
    ];
}
