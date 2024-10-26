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
        Schema::create('child_reservation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('child_id')->constrained('children');   //参照先のテーブル名を
            $table->foreignId('reservation_id')->constrained('reservations');    //constrainedに記載
            $table->primary(['child_id', 'reservation_id']);  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_reservation');
    }
};
