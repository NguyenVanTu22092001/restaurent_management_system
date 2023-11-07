<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected  $fillable = ['name', 'expiry', 'description', 'number', 'unit'];
    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class, 'ingredient_supplier');
    }
}
