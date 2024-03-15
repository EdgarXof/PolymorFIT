<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    use HasFactory;

    protected $fillable = ['name','user_id'];

    public function workouts()
    {
        return $this->belongsToMany(Workout::class, 'exercice_workout')
            ->withPivot(['user_id']);
    }

    public function workoutExercises()
    {
        return $this->hasMany(WorkoutExercise::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::deleting(function ($exercise) {
            // Perform any additional cleanup here
            $exercise->workoutExercises()->delete(); // Assuming a workoutExercises relationship exists
        });
    }
}
