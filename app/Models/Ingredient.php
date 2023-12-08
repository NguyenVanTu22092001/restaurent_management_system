<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function supplies()
    {
        return $this->hasMany(IngredientSupply::class, 'IngredientID');
    }

    public function stock()
    {
        return $this->hasOne(IngredientStock::class, 'IngredientID');
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipe_ingredients', 'IngredientID', 'RecipeID')
            ->withPivot('Quantity', 'Unit');
    }
}
