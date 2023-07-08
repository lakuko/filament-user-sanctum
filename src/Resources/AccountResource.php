<?php

namespace Lakuko\FilamentSanctum\Resources;

use Lakuko\FilamentSanctum\Resources\AccountResource\Pages;
use Lakuko\FilamentSanctum\Resources\AccountResource\RelationManagers;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AccountResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $recordTitleAttribute = 'email';

    public function __construct()
    {
        static::$model = config('filament-sanctum.models.Account');
    }

    public static function getLabel(): string
    {
        return strval(__('filament-sanctumr::filament-sanctum.section.account'));
    }

    public static function getPluralLabel(): string
    {
        return strval(__('filament-sanctum::filament-sanctum.section.accounts'));
    }

    protected static function getNavigationGroup(): ?string
    {
        return strval(__('filament-sanctum::filament-sanctum.section.group'));
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccounts::route('/'),
            'create' => Pages\CreateAccount::route('/create'),
            'edit' => Pages\EditAccount::route('/{record}/edit'),
        ];
    }    
}
