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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // restrict: no se puede borrar un ítem que ya tiene historial de compras
            $table->foreignId('item_id')->constrained()->restrictOnDelete();
            $table->integer('quantity');
            $table->unsignedInteger('unit_price'); // copia de items.price al comprar
            $table->unsignedInteger('total');      // quantity * unit_price
            $table->timestamps();                  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
