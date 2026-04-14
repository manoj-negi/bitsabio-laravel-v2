<?php

namespace App\Filament\Resources\Blogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),

                TextColumn::make('slug'),

                TextColumn::make('category'),

                TextColumn::make('author'),

                ImageColumn::make('image'),

                TextColumn::make('read_time')
                    ->label('Read Time'),

                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'success' => 'published',
                        'warning' => 'draft',
                    ]),

                TextColumn::make('created_at')->dateTime(),
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
