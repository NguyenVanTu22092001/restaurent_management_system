<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use App\Models\IngredientStock;
use App\Models\IngredientSupply;
use App\Models\Supplier;
use Illuminate\Http\Request;

class IngredientSupplyController extends Controller
{
    public function index()
    {
        $inredientsupplies = IngredientSupply::all();
        return view('admin.ingredientsupply.index', ['ingredientsupplies' => $inredientsupplies]);
    }
    public function create()
    {
        $suppliers = Supplier::all();
        $ingredients = Ingredient::all();
        return view('admin.ingredientsupply.create', ['suppliers' => $suppliers, 'ingredients' => $ingredients]);
    }
    public function store(Request $request)
    {
        // // Validate the request data
        // $request->validate([
        //     'IngredientID' => 'required|exists:ingredients,IngredientID',
        //     'SupplierID' => 'required|exists:suppliers,SupplierID',
        //     'UnitPrice' => 'required|numeric',
        //     'Quantity' => 'required|integer',
        //     'ExpiryDate' => 'required|date',
        // ]);
        $ingredientSupply = IngredientSupply::create([
            'IngredientID' => $request->input('IngredientID'),
            'SupplierID' => $request->input('SupplierID'),
            'purchaseDate' => now(), // Set to the current timestamp
            'unitPrice' => $request->input('unitPrice'),
            'quantity' => $request->input('quantity'),
            'expiryDate' => $request->input('expiryDate'),
        ]);

        $ingredientStock = IngredientStock::where('IngredientID', $ingredientSupply->IngredientID)->first();

        if ($ingredientStock) {
            // If a stock record already exists, update the quantity
            $ingredientStock->update([
                'quantityStock' => $ingredientStock->quantityStock + $ingredientSupply->quantity,
            ]);
        } else {
            // If no stock record exists, insert a new one
            IngredientStock::create([
                'Ingredient_Supply_ID' => $ingredientSupply->id,
                'quantityStock' => $ingredientSupply->quantity,
                'IngredientID' =>   $ingredientSupply->ingredient->id,
            ]);
        }
        dd($ingredientStock);
    }
}
