<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientStock extends Model
{
    use HasFactory;
    protected $fillable = ['IngredientID', 'quantityStock', 'Ingredient_Supply_ID'];

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'IngredientID');
    }
    public function ingredientSupply()
    {
        return $this->belongsTo(IngredientSupply::class, 'Ingredient_Supply_ID', 'id');
    }
}
