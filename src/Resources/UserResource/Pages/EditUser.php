<?php

namespace Lakuko\FilamentSanctum\Resources\UserResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    public static function getResource(): string
    {
        return Config::get('filament-sanctum.resources.UserResource');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
