<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name',  'price',  'description', 'image', 'special_price'];
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
    public function combos()
    {
        return $this->belongsToMany(Combo::class, 'product_combo');
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
