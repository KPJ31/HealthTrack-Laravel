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
        Schema::create('client_diet_plans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('client_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('diet_plan_id')->constrained('diet_plans')->onDelete('cascade');

            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['active', 'completed', 'paused']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_diet_plans');
    }
};
