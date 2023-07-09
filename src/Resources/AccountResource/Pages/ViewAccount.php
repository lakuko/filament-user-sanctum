<?php

namespace Lakuko\FilamentSanctum\Resources\AccountResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Config;
use Lakuko\FilamentSanctum\Actions;

class ViewAccount extends ViewRecord
{
    public static function getResource(): string
    {
        return Config::get('filament-sanctum.resources.AccountResource');
    }

    protected function getActions(): array
    {
        return array_merge([
            Actions\ResetAction::make(),
        ], parent::getActions());
    }
}
