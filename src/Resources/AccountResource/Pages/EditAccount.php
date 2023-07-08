<?php

namespace Lakuko\FilamentSanctum\Resources\AccountResource\Pages;

use Lakuko\FilamentSanctum\Resources\AccountResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccount extends EditRecord
{
    public static function getResource(): string
    {
        return Config::get('filament-sanctum.resources.AccountResource');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
