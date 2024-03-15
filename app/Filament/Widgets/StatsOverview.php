<?php

namespace App\Filament\Widgets;

use App\Models\Exercice;
use App\Models\User;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count()),
            Stat::make('Total Exerices', Exercice::count()),
        ];
    }
}
