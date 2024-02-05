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
        Schema::create('exercice_workout', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exercice_id');
            $table->unsignedBigInteger('workout_id');
            $table->timestamps();

            $table->foreign('exercice_id')->references('id')->on('exercices')->onDelete('cascade');
            $table->foreign('workout_id')->references('id')->on('workouts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('exercice_workout');
    }
};
