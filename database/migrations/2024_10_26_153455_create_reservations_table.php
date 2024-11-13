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
            $table->foreignId('clinic_id')->constrained()->onDelete('cascade');
            $table->foreignId('child_id')->constrained()->onDelete('cascade');
            $table->foreignId('child_name')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->enum('consultion_reason', ['一般診療(発熱あり)', '一般診療(発熱なし)', '予防接種', '乳幼児検診']);
            $table->boolean('is_cancelled');
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
