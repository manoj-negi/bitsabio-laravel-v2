<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                   TextColumn::make('id')
                        ->label('ID')
                        ->sortable(),

                    TextColumn::make('name')
                        ->searchable()
                        ->sortable(),

                    TextColumn::make('email')
                        ->searchable(),

                    TextColumn::make('role.name')
                        ->label('Role'),

                    TextColumn::make('phone'),

                    TextColumn::make('designation'),

                    TextColumn::make('salary')
                        ->money('INR'),

                    TextColumn::make('joining_date')
                        ->date(),

                    TextColumn::make('leaving_date')
                        ->date(),

                    TextColumn::make('number_of_leaves')
                        ->label('Leaves'),

                    TextColumn::make('status')
                        ->badge()
                        ->colors([
                            'success' => 'active',
                            'danger' => 'inactive',
                        ]),

                    TextColumn::make('created_at')
                        ->dateTime('h:i A'),
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
