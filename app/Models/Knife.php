<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knife extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'quantity',
    ];

    protected $guarded = [];
}
