<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'special_price', 'description', 'image'];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_combo');
    }
}
