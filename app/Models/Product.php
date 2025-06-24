<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'images',
        'description',
        'price',
        'in_stock',
        'is_active',
        'is_featured',
        'on_sale',
        'brand_id',
        'category_id',
    ];


    protected $casts = [
        'images' => 'array'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
