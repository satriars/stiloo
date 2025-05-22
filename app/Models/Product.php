<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Field yang bisa diisi (mass assignable)
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category'
    ];
}
