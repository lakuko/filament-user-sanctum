<?php

namespace Lakuko\FilamentTransaction\Resources\TransactionResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Webbingbrasil\FilamentAdvancedFilter\Filters\TextFilter;

class TokenRelationManager extends RelationManager
{
    protected static string $relationship = 'tokens';

    protected static ?string $recordTitleAttribute = 'name';

    protected function canCreate(): bool { 
        return false; 
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('token'),
                Forms\Components\TextInput::make('last_used_at'),
                Forms\Components\TextInput::make('expires_at'),
                Forms\Components\TextInput::make('created_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('token'),
                Tables\Columns\TextColumn::make('last_used_at'),
                Tables\Columns\TextColumn::make('expires_at'),
                Tables\Columns\TextColumn::make('created_at'),
            ])
            ->filters([
                TextFilter::make('name'),
            ])
            ->headerActions([
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
            ]);
    }    
}
