<?php

namespace App\Http\Controllers;

use App\Models\WorkoutExerciseLog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CalendarController extends Controller
{

    public function index()
    {
        $events = array();
        $workouts = WorkoutExerciseLog::all();
        foreach ($workouts as $workout) {
            $events[] = array(
                'title' => $workout->workoutExercise->workout->name,
                'start' => $workout->date,
                'end' => $workout->date,
                'color' => $workout->workoutExercise->workout->color,
            );
        }

        return Inertia::render('Calendar',['events' => $events]);
    }

}
