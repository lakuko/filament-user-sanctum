<?php

namespace Lakuko\FilamentSanctum\Resources\UserResource\Pages;

use Lakuko\FilamentSanctum\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Config;

class ListUsers extends ListRecords
{
    public static function getResource(): string
    {
        return Config::get('filament-user-sanctum.resources.UserResource');
    }

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
