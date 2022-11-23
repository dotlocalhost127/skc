<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Livewire\WithFileUploads;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('cars_listings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('make_id');
            $table->unsignedBigInteger('model_id');
            $table->string('year');
            $table->string('price');
            $table->string('image');
            $table->text('images')->nullable();
            $table->string('country')->nullable();
            $table->string('mileage')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('transmission')->nullable();
            $table->string('drive')->nullable();
            $table->string('exterior_color')->nullable(); 
            $table->string('interior_color')->nullable();
            $table->string('stock_id');
            $table->string('VIN');
            $table->longText('features');
            $table->longText('description')->nullable();
            $table->string('status')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars_listings');
    }
};
