<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
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
