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
        Schema::create('diet_plan_meals', function (Blueprint $table) {
            $table->id();

            $table->foreignId('client_diet_plan_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('food_id')->constrained('foods')->onDelete('cascade');

            $table->enum('meal_type', ['breakfast', 'lunch', 'dinner', 'snack']);
            $table->decimal('quantity');
            $table->integer('calories');
            $table->text('notes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diet_plan_meals');
    }
};
