<?php

namespace App\Filament\Resources\WorkoutExerciseLogResource\Pages;

use App\Filament\Resources\WorkoutExerciseLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkoutExerciseLog extends EditRecord
{
    protected static string $resource = WorkoutExerciseLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
