<?php

namespace App\Filament\Resources\Customers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\DeleteAction;
class CustomersTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('name')
                ->searchable()
                ->sortable(),

            TextColumn::make('email')
                ->searchable(),

            TextColumn::make('phone')
                ->searchable(),

            TextColumn::make('address')
                ->limit(30),

            TextColumn::make('city')
                ->searchable(),

            TextColumn::make('state')
                ->searchable(),

            TextColumn::make('country')
                ->searchable(),

            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
        ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
