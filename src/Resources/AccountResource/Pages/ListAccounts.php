<?php

namespace Lakuko\FilamentSanctum\Resources\AccountResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Config;

class ListAccounts extends ListRecords
{
    public static function getResource(): string
    {
        return Config::get('filament-sanctum.resources.AccountResource');
    }

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
