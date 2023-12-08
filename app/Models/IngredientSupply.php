<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientSupply extends Model
{
    use HasFactory;
    protected $fillable = ['IngredientID', 'SupplierID', 'purchaseDate', 'unitPrice', 'quantity', 'expiryDate'];

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'IngredientID');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'SupplierID');
    }
}
