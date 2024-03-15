<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutExercise extends Model
{
    protected $table = 'exercice_workout';

    protected $fillable = ['user_id','exercice_id', 'workout_id', 'sets', 'reps', 'weight', 'duration'];

    public function exercice()
    {
        return $this->belongsTo(Exercice::class);
    }

    public function workout()
    {
        return $this->belongsTo(Workout::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function logs()
    {
        return $this->hasMany(WorkoutExerciseLog::class);
    }


    protected static function booted()
    {
        static::deleting(function ($workoutExercise) {
            // Delete related logs
            $workoutExercise->logs()->delete();
        });
    }


}
