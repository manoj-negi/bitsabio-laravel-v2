<?php

namespace App\Filament\Resources\Locations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('Location Name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', \Illuminate\Support\Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('meta_title')
                    ->maxLength(255),

                Textarea::make('meta_description')
                    ->rows(3)
                    ->columnSpanFull(),

                Textarea::make('address')
                    ->rows(3)
                    ->columnSpanFull(),

                TextInput::make('phone')
                    ->tel(),

                // Textarea::make('google_map')
                //     ->rows(4)
                //     ->columnSpanFull(),

                Toggle::make('status')
                    ->default(true),

            ]);
    }
}