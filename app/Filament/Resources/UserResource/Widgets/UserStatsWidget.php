<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
            Stat::make('Total Users', User::count()),
            Stat::make('Total Admins', User::where('role','Admin')->count()),
            Stat::make('Total Editors', User::where('role','Editor')->count()),

        ];
    }
}
