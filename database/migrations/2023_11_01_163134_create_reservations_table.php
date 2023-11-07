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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID')->nullable();
            $table->string('name', 55);
            $table->string('email');
            $table->integer('phone');
            $table->unsignedBigInteger('TableID');
            $table->date('ReservationDate');
            $table->time('ReservationTime');
            $table->string('status')->nullable();
            $table->foreign('UserID')->references('id')->on('Users');
            $table->foreign('TableID')->references('id')->on('Tables');
            $table->integer('seats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
