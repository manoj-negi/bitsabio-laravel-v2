<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\Action;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable(),

                BadgeColumn::make('inquiry_type')
                    ->label('Inquiry Type')
                    ->colors([
                        'success' => 'course',
                        'warning' => 'service',
                    ]),

                // TextColumn::make('course_name')
                //     ->label('Course')
                //     ->searchable()
                //     ->placeholder('-'),

                TextColumn::make('project_type')
                    ->label('Project Type')
                    ->placeholder('-'),

                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'resolved',
                    ]),

                TextColumn::make('message')
                    ->limit(50),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])

            ->filters([

                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'resolved' => 'Resolved',
                    ]),

                SelectFilter::make('inquiry_type')
                    ->options([
                        'course' => 'Course',
                        'service' => 'Service',
                    ]),
            ])

            ->recordActions([

                EditAction::make(),

                Action::make('resolve')
                    ->label('Resolve')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->action(fn ($record) => $record->update([
                        'status' => 'resolved',
                    ]))
                    ->visible(fn ($record) => $record->status === 'pending'),

            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])

            ->defaultSort('created_at', 'desc');
    }
}