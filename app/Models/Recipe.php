<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients', 'RecipeID', 'IngredientID')
            ->withPivot('Quantity', 'Unit');
    }

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class, 'recipe_supplier', 'recipe_id', 'supplier_id');
    }
}
