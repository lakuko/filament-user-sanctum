<?php

namespace Lakuko\FilamentSanctum\Resources\UserResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Config;

class CreateUser extends CreateRecord
{
    public static function getResource(): string
    {
        return Config::get('filament-sanctum.resources.UserResource');
    }
}
