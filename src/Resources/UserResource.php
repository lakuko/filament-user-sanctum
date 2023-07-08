<?php

namespace Lakuko\FilamentSanctum\Resources;

use Lakuko\FilamentSanctum\Resources\UserResource\Pages;
use Lakuko\FilamentSanctum\Resources\UserResource\RelationManagers;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $recordTitleAttribute = 'email';

    protected static ?string $slug = 'account';

    public function __construct()
    {
        static::$model = config('filament-sanctum.models.User');
    }

    public static function getLabel(): string
    {
        return strval(__('filament-sanctum::filament-sanctum.section.user'));
    }

    public static function getPluralLabel(): string
    {
        return strval(__('filament-sanctum::filament-sanctum.section.users'));
    }

    protected static function getNavigationGroup(): ?string
    {
        return strval(__('filament-sanctum::filament-sanctum.section.group'));
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.user.name')))
                    ->required(),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->unique(table: static::$model, ignorable: fn ($record) => $record)
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.user.email'))),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.id'))),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.user.name'))),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.user.email'))),
                IconColumn::make('email_verified_at')
                    ->options([
                        'heroicon-o-check-circle',
                        'heroicon-o-x-circle' => fn ($state): bool => $state === null,
                    ])
                    ->colors([
                        'success',
                        'danger' => fn ($state): bool => $state === null,
                    ])
                    ->label(strval(__('filament-sanctum::filament-sanctum.field.user.verified_at')))
            ])
            ->filters([
                TernaryFilter::make('email_verified_at')
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
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
}
