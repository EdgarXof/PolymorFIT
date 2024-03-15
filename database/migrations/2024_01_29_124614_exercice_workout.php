<?php

use App\Models\Exercice;
use App\Models\Workout;
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
            $table->integer('sets')->nullable();
            $table->integer('reps')->nullable();
            $table->decimal('weight', 8, 2)->nullable(); // Assuming weight is in kilograms or pounds and may require decimal places
            $table->integer('duration')->nullable(); // Duration in seconds or minutes
            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->integer('exercice_id')->unsigned();
            $table->integer('workout_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
