<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = ['name','user_id','color']; // Add other fields as necessary


    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function exercices()
    {
        return $this->belongsToMany(Exercice::class, 'exercice_workout')
            ->withPivot(['user_id']);

    }

    public function workoutExercises()
    {
        return $this->hasMany(WorkoutExercise::class);
    }

    protected static function booted()
    {
        static::deleting(function ($exercise) {
            // Perform any additional cleanup here
            $exercise->workoutExercises()->delete(); // Assuming a workoutExercises relationship exists
        });
    }
}
