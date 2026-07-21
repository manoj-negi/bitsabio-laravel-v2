<?php

namespace App\Filament\Developer\Resources\Tasks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class TasksTable
{
    public static function configure(Table $table): Table
    {
        return $table
                ->columns([
                    TextColumn::make('project.title')
                        ->label('Project')
                        ->searchable(),

                    TextColumn::make('title')
                        ->searchable(),

                    TextColumn::make('priority')
                        ->badge(),

                    TextColumn::make('status')
                        ->badge(),

                    TextColumn::make('progress')
                        ->suffix('%'),

                    TextColumn::make('due_date')
                        ->date(),
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
