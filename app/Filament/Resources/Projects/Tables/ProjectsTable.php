<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\Action; 
use Filament\Tables\Table;
use Filament\Forms\Components\KeyValue;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\DeleteAction;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),

                TextColumn::make('client_name'),

                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'warning' => 'pending',
                        'primary' => 'in_progress',
                        'success' => 'completed',
                        'danger' => 'on_hold',
                    ]),

                TextColumn::make('priority'),

                TextColumn::make('progress')
                    ->suffix('%'),

               
                TextColumn::make('users_count')
                    ->label('Assigned to')
                    ->getStateUsing(fn () => 'view') // single state
                    ->icon('heroicon-o-eye')
                    ->action(
                        Action::make('viewUsers')
                            ->modalHeading('Assigned to')
                            ->modalSubmitAction(false)
                            ->modalCancelActionLabel('Close')

                            ->form([
                                KeyValue::make('users')
                                    ->label('Users')
                                    ->keyLabel('Name')
                                    ->valueLabel('Designation')

                                    ->default(function ($record) {
                                        return $record->users()
                                            ->get()
                                            ->mapWithKeys(fn ($user) => [
                                                $user->name => $user->designation
                                            ])
                                            ->toArray();
                                    })

                                    ->addable(false)
                                    ->deletable(false)
                                    ->editableKeys(false)
                            ])
                    ),

                TextColumn::make('deadline')->date(),

                TextColumn::make('created_at')->dateTime(),
            ])

            ->filters([
                //
            ])

            ->recordActions([
                 EditAction::make()
                 ->visible(fn ($record) => auth()->user()->can('update', $record)),
                 DeleteAction::make()
                 ->visible(fn ($record) => auth()->user()->can('delete', $record)),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                     ->visible(fn () => auth()->user()->can('deleteAny', \App\Models\Project::class)),
                ]),
            ]);
    }
}