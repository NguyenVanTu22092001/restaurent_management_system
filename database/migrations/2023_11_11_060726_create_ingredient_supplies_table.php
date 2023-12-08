<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingredient_supplies', function (Blueprint $table) {
            $table->id();
            $table->date('purchaseDate');
            $table->float('unitPrice');
            $table->float('quantity');
            $table->date('expiryDate');
            $table->unsignedBigInteger('IngredientID');
            $table->unsignedBigInteger('SupplierID');
            $table->foreign('IngredientID')->references('id')->on('Ingredients');
            $table->foreign('SupplierID')->references('id')->on('Suppliers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_supplies');
    }
};
