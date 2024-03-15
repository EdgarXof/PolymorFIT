<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkoutExerciseResource\Pages;
use App\Filament\Resources\WorkoutExerciseResource\RelationManagers;

use App\Models\Workout;
use App\Models\WorkoutExercise;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkoutExerciseResource extends Resource
{
    protected static ?string $model = WorkoutExercise::class;

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
                Select::make('exercice_id')
                    ->relationship('exercice', 'name'), // Assuming 'name' is a field in your Exercise model
                Select::make('workout_id')
                    ->relationship('workout', 'name'), // Assuming 'name' is a field in your Workout model
                TextInput::make('sets')
                    ->numeric(),
                TextInput::make('reps')
                    ->numeric(),
                TextInput::make('weight')
                    ->numeric()
                    ->step(0.01)
                    ->suffix('kg'),
                TextInput::make('duration')
                    ->numeric()
                    ->suffix('s'),

            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('exercice.name'),
                Tables\Columns\TextColumn::make('workout.name')->sortable() ,
                Tables\Columns\TextColumn::make('sets'),
                Tables\Columns\TextColumn::make('reps'),
                Tables\Columns\TextColumn::make('weight')->suffix(' kg'),
                Tables\Columns\TextColumn::make('duration')->suffix(' s'),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListWorkoutExercises::route('/'),
            'create' => Pages\CreateWorkoutExercise::route('/create'),
            'edit' => Pages\EditWorkoutExercise::route('/{record}/edit'),
        ];
    }
}
