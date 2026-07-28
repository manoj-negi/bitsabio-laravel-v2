<?php

namespace App\Filament\Resources\InterviewQuestions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class InterviewQuestionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('priority')
            ->columns([

                ImageColumn::make('image')
                  ->getStateUsing(fn ($record) => asset('public/storage/' . $record->image)),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->searchable(),

                TextColumn::make('priority')
                    ->sortable(),

                IconColumn::make('status')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y'),

                //
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