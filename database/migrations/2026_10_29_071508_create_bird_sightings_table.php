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
        Schema::create('bird_sightings', function (Blueprint $table) {
            $table->id();
            // Optional Fields
            $table->string('name', 50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone', 30)->nullable();
            // Required
            $table->string('location', 50);
            $table->dateTime('sighted_at');
            $table->string('species', 50);
            $table->text('description');


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
        Schema::dropIfExists('bird_sightings');
    }
};