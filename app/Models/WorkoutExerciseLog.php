<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class WorkoutExerciseLog extends Model
{
    protected $fillable = ['workout_exercise_id', 'user_id', 'sets', 'reps', 'weight', 'date'];

    public function workoutExercise()
    {
        return $this->belongsTo(WorkoutExercise::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
