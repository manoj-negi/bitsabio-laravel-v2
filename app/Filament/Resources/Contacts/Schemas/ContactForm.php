<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->email()
                    ->required(),

                TextInput::make('company')
                    ->maxLength(255),

                TextInput::make('project_type')
                    ->label('Project Type'),

                Textarea::make('message')
                    ->rows(4)
                    ->columnSpanFull(),

            
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'resolved' => 'Resolved',
                    ])
                    ->default('pending')
                    ->required(),

            ]);
    }
}