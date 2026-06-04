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
                    ->maxLength(255)
                    ->disabled(),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->disabled(),

                TextInput::make('phone')
                    ->label('Phone Number')
                    ->disabled(),

                TextInput::make('inquiry_type')
                    ->label('Inquiry Type')
                    ->disabled(),

                TextInput::make('course_name')
                    ->label('Course')
                    ->disabled(),

                TextInput::make('project_type')
                    ->label('Project Type')
                    ->disabled(),

                Textarea::make('message')
                    ->rows(4)
                    ->columnSpanFull()
                    ->disabled(),

                Select::make('status')
                    ->options([
                        'pending'  => 'Pending',
                        'resolved' => 'Resolved',
                    ])
                    ->default('pending')
                    ->required(),
            ]);
    }
}