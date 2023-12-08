<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email', 'description'];

    public function supplies()
    {
        return $this->hasMany(IngredientSupply::class, 'SupplierID');
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipe_supplier', 'supplier_id', 'recipe_id');
    }
}
