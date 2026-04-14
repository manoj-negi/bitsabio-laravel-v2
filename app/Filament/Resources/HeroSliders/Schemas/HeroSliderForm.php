<?php

namespace App\Filament\Resources\HeroSliders\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;


class HeroSliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                    TextInput::make('badge'),

                    TextInput::make('title')
                        ->required(),

                    Textarea::make('subtitle'),

                    TextInput::make('button_text'),

                    TextInput::make('button_link'),

                    FileUpload::make('image')
                        ->image()
                        ->directory('hero'),
            ]);
    }
}
