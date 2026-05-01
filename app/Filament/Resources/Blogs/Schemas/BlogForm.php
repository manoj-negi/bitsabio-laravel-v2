<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) =>
                        $set('slug', \Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('category'),

                TextInput::make('author')
                    ->required()
                    ->visibleOn('create'),

                FileUpload::make('image')
                    ->image()
                    ->directory('blogs'),

                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])
                    ->default('draft'),

              
                // Tags
                TextInput::make('tags')
                    ->label('Tags')
                    ->afterStateHydrated(function ($component, $state) {
                        if (is_array($state)) {
                            $component->state(implode(', ', $state));
                        }
                    })
                    ->dehydrateStateUsing(function ($state) {
                        return array_values(array_filter(
                            array_map('trim', explode(',', strtolower($state)))
                        ));
                    }),

                  RichEditor::make('content')
                    ->columnSpanFull()
                    ->required(),


            ]);
    }
}