<?php

namespace Lakuko\FilamentSanctum\Resources\AccountResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Config;

class CreateAccount extends CreateRecord
{
    public static function getResource(): string
    {
        return Config::get('filament-sanctum.resources.AccountResource');
    }
}
