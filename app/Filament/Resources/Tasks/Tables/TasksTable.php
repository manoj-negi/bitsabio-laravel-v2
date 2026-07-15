<?php

namespace App\Filament\Resources\Tasks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use App\Models\User;

class TasksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image')
                    ->label('Image')
                    ->square(),

                TextColumn::make('title')
                    ->label('Task')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('project.title')
                    ->label('Project')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('users.name')
                    ->label('Assigned Employees')
                    ->badge()
                    ->separator(',')
                    ->searchable(),

                TextColumn::make('status')
                    ->badge()
                    ->sortable(),

                TextColumn::make('priority')
                    ->badge()
                    ->sortable(),

                TextColumn::make('progress')
                    ->suffix('%')
                    ->sortable(),

                TextColumn::make('start_date')
                    ->date(),

                TextColumn::make('due_date')
                    ->date(),

                // TextColumn::make('creator.name')
                //     ->label('Created By'),

                TextColumn::make('created_at')
                    ->since(),

            ])

            ->filters([

                // SelectFilter::make('status')
                //     ->options([
                //         'Not Started' => 'Not Started',
                //         'In Progress' => 'In Progress',
                //         'Completed' => 'Completed',
                //         'On Hold' => 'On Hold',
                //     ]),

                // SelectFilter::make('priority')
                //     ->options([
                //         'Low' => 'Low',
                //         'Medium' => 'Medium',
                //         'High' => 'High',
                //     ]),

                // SelectFilter::make('project')
                //     ->relationship('project', 'title'),
                
                SelectFilter::make('developer')
                    ->label('Developer')
                    ->options(
                        User::role('employee')
                            ->pluck('name', 'id')
                            ->toArray()
                    )
                    ->query(function ($query, array $data) {

                        if (! filled($data['value'])) {
                            return;
                        }

                        $query->whereHas('users', function ($q) use ($data) {
                            $q->where('users.id', $data['value']);
                        });
                    }),


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