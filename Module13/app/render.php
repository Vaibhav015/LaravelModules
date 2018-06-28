<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class render extends Model
{
    protected $fillable = [
        'name', 'address', 'description', 'expected_sponsorship'
    ];
}
