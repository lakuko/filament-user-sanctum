<?php

namespace Lakuko\FilamentSanctum\Resources;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Lakuko\FilamentSanctum\Resources\AccountResource\Pages;
use Lakuko\FilamentSanctum\Resources\AccountResource\RelationManagers;
use Filament\Forms\Components\TextInput;

class AccountResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $recordTitleAttribute = 'email';

    public static function getModel(): string
    {
        return config('filament-sanctum.models.Account');
    }

    public static function getLabel(): string
    {
        return strval(__('filament-sanctum::filament-sanctum.section.account'));
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
                Forms\Components\Card::make()
                ->schema([
                    TextInput::make('name')
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.user.name')))
                    ->required(),
                    TextInput::make('email')
                    ->required()
                    ->email()
                    ->unique(table: static::$model, ignorable: fn ($record) => $record)
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.user.email'))),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.id'))),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.user.name'))),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.user.email'))),
                Tables\Columns\IconColumn::make('email_verified_at')
                    ->options([
                        'heroicon-o-check-circle',
                        'heroicon-o-x-circle' => fn ($state): bool => $state === null,
                    ])
                    ->colors([
                        'success',
                        'danger' => fn ($state): bool => $state === null,
                    ])
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.user.verified_at'))),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('email_verified_at')
                    ->label(strval(__('filament-sanctum::filament-sanctum.filter.verified')))
                    ->nullable(),
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
            RelationManagers\TokenRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccounts::route('/'),
            'create' => Pages\CreateAccount::route('/create'),
            'edit' => Pages\EditAccount::route('/{record}/edit'),
            'view' => Pages\ViewAccount::route('/{record}')
        ];
    }
}
