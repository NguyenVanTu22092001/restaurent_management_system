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
        Schema::create('ingredient_stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IngredientID');
            $table->float('quantityStock');
            $table->unsignedBigInteger('Ingredient_Supply_ID');
            $table->foreign('Ingredient_Supply_ID')->references('id')->on('Ingredient_Supplies');
            $table->foreign('IngredientID')->references('id')->on('Ingredients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_stocks');
    }
};
