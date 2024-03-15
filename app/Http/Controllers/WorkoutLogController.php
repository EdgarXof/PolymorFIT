<?php

namespace App\Http\Controllers;

use App\Models\WorkoutExerciseLog;
use Illuminate\Http\Request;

class WorkoutLogController extends Controller
{

    public function index(Request $request)
    {
        $user_id = auth()->id();

        // Fetch logs based on the provided start and end date query parameters
        $query = WorkoutExerciseLog::query()
            ->where('user_id', $user_id)
            ->with(['workoutExercise.workout']);

        if ($request->has(['start_date', 'end_date'])) {
            $query->whereDate('date', '>=', $request->start_date)
                ->whereDate('date', '<=', $request->end_date);
        }

        $workoutLogs = $query->get();

        return response()->json($workoutLogs);
    }
}
