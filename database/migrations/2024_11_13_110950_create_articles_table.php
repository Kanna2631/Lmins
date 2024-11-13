<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
        public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('clinic_id')->unsigned();
            $table->bigInteger('city_id')->nullable();
            $table->text('body');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('clinic_id')
            ->references('id')
            ->on('clinics')
            ->onDelete('cascade');

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }



    /**
     * Reverse the migrations.
     */
    
};
