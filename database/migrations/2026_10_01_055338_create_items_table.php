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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->enum('effect_type', ['SEED', 'ACCELERATOR', 'AUTO_WATER']);
            $table->unsignedInteger('duration')->nullable(); // minutos
            $table->boolean('purchasable')->default(true);
            $table->unsignedSmallInteger('daily_purchase_limit')->default(10);
            $table->integer('inventory_limit')->default(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
