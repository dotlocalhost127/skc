<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reference');
            $table->date('date');
            $table->string('particulars');
            $table->bigInteger('debit');
            $table->bigInteger('credit');
            $table->bigInteger('balance')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id') ->on('users')->onDelete('set null');
            $table->unsignedBigInteger('listing_id')->nullable();
            $table->foreign('listing_id')->references('id') ->on('cars_listings')->onDelete('set null');
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
        Schema::dropIfExists('accounts');
    }
};
