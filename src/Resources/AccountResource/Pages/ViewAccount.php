<?php

namespace Lakuko\FilamentSanctum\Resources\AccountResource\Pages;

use Lakuko\FilamentSanctum\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Config;

class ViewAccount extends ViewRecord
{
    public static function getResource(): string
    {
        return Config::get('filament-sanctum.resources.AccountResource');
    }

    protected function getActions(): array
    {
        return [
            Actions\ResetAction::make(),
        ];
    }
}
