<?php

namespace Lakuko\FilamentSanctum\Resources\UserResource\Pages;

use Lakuko\FilamentSanctum\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    public static function getResource(): string
    {
        return Config::get('filament-user-sanctum.resources.UserResource');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
