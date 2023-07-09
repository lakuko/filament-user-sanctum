<?php

namespace Lakuko\FilamentSanctum\Actions;

use Filament\Tables\Actions\Action;
use Illuminate\Contracts\Auth\Authenticatable as User;

class ResetAction
{
    public function make(): Action
    {
        return Action::make('reset')
        ->label(__('filament-sanctum::filament-sanctum.button.reset'))
        ->icon('heroicon-o-identification')
        ->action(fn ($record) => static::reset($record));
    }

    public function reset(User $record): Action
    {

    }
}