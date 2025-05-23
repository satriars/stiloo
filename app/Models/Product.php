<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Kolom mana aja yang bisa diisi lewat mass assignment (create/update)
    protected $fillable = [
        'name',
        'category',      // kategori produk: Clothing, Accessories, dll
        'description',
        'price',
        'image',
    ];
}