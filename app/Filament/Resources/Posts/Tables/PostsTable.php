<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\ImageColumn;

use Filament\Tables\Table;

use Filament\Tables\Columns\IconColumn;
use Filament\Actions\EditAction;

class PostsTable
{
    public static function configure(Table $table): Table
    {
     
        return $table
            ->reorderable('priority')
            ->defaultSort('priority')
            ->columns([

                
                TextColumn::make('title')
                ->searchable()
                ->sortable()
                ->limit(40),

                TextColumn::make('priority')
                    ->sortable(),
                
                TextColumn::make('slug')
                ->searchable()
                ->limit(40),
                
                ImageColumn::make('image')
                    ->disk('public')
                    ->visibility('public'),

                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'success' => 'published',
                        'warning' => 'draft',
                    ]),


                TextColumn::make('type')
                    ->label('Belongs To')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'course' => 'success',
                        'service' => 'info',                            
                         'blog' => 'warning',
                        default => 'gray',
                      })
                    ->formatStateUsing(fn (string $state): string => ucfirst($state)),

                TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->sortable(),

            ])
            ->filters([
                //
               SelectFilter::make('type')
                    ->options([
                        'blog' => 'Blog',
                        'course' => 'Course',
                        'service' => 'Service',
                    ]),
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
