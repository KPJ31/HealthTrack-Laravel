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
        Schema::create('health_metrics', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->enum('metric_type', ['weight', 'bmi', 'body_fat', 'boold_pressure', 'heart_rate', 'steps', 'calories_burned', 'sleep', 'other']);
            $table->decimal('value');
            $table->string('unit');
            $table->date('recorded_at');
            $table->text('note');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_metrics');
    }
};
