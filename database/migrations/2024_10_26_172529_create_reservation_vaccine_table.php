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
        Schema::create('reservation_vaccine', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservation_id')->constrained('vaccines');   
            $table->foreignId('vaccine_id')->constrained('reservations');    //constrainedに記載
            $table->primary(['reservation_id', 'vaccine_id']);  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_vaccine');
    }
};
