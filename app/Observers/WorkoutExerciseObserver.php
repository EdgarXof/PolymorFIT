<?php

namespace App\Observers;

use App\Models\WorkoutExercise;
use App\Models\WorkoutExerciseLog;
use Illuminate\Support\Facades\Auth;

class WorkoutExerciseObserver
{
    public function saved(WorkoutExercise $workoutExercise)
    {
        WorkoutExerciseLog::create([
            'workout_exercise_id' => $workoutExercise->id,
            'user_id' => Auth::id(), // Assuming you want to log the user making the change
            'sets' => $workoutExercise->sets,
            'reps' => $workoutExercise->reps,
            'weight' => $workoutExercise->weight,
            'date' => now(),
        ]);
    }
    /**
     * Handle the WorkoutExercise "created" event.
     */
    public function created(WorkoutExercise $workoutExercise): void
    {
        //
    }

    /**
     * Handle the WorkoutExercise "updated" event.
     */
    public function updated(WorkoutExercise $workoutExercise): void
    {
        //
    }

    /**
     * Handle the WorkoutExercise "deleted" event.
     */
    public function deleted(WorkoutExercise $workoutExercise): void
    {
        //
    }

    /**
     * Handle the WorkoutExercise "restored" event.
     */
    public function restored(WorkoutExercise $workoutExercise): void
    {
        //
    }

    /**
     * Handle the WorkoutExercise "force deleted" event.
     */
    public function forceDeleted(WorkoutExercise $workoutExercise): void
    {
        //
    }
}
