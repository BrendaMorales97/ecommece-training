<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'thumbnail'
    ];

    protected static function booted()
    {
        static::creating(function ($product)
        {
            $slug = Str::slug($product->name,'-');

            $product->slug = Product::where('slug', $slug)->exists() ? ($slug . uniqid()) : $slug;
        });
    }
}
