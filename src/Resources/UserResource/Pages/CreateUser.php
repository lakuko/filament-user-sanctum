<?php

namespace Lakuko\FilamentSanctum\Resources\UserResource\Pages;

use Lakuko\FilamentSanctum\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Config;

class CreateUser extends CreateRecord
{
    public static function getResource(): string
    {
        return Config::get('filament-user-sanctum.resources.UserResource');
    }
}
