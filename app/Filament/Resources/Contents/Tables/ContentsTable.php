<?php

namespace App\Filament\Resources\Contents\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Forms\Form;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BadgeColumn;

use Filament\Tables\Filters\SelectFilter;

class ContentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
            TextColumn::make('title')
                ->searchable(),
            
            ImageColumn::make('image'),

            TextColumn::make('slug'),

            TextColumn::make('created_at')
                ->dateTime(),

            TextColumn::make('type')
                ->label('Belongs To')
                ->badge()
                ->color(fn (string $state): string => match ($state) {

                    'course' => 'success',

                    'service' => 'primary',

                    default => 'gray',
                })
                ->formatStateUsing(fn (string $state): string => ucfirst($state)),
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
