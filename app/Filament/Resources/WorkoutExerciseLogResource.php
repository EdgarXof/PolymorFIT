<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkoutExerciseLogResource\Pages;
use App\Filament\Resources\WorkoutExerciseLogResource\RelationManagers;
use App\Models\WorkoutExerciseLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkoutExerciseLogResource extends Resource
{
    protected static ?string $model = WorkoutExerciseLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Tracking';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('workout_exercise_id'),
                Tables\Columns\TextColumn::make('reps'),
                Tables\Columns\TextColumn::make('weight')->suffix(' kg'),
                Tables\Columns\TextColumn::make('date'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWorkoutExerciseLogs::route('/'),
            'create' => Pages\CreateWorkoutExerciseLog::route('/create'),
            'edit' => Pages\EditWorkoutExerciseLog::route('/{record}/edit'),
        ];
    }
}
