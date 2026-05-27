<?php

namespace App\Filament\Resources\Employees\Schemas;
use Filament\Forms\Components\Hidden;
use Filament\Schemas\Schema;

class EmployeeForm
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

                TextInput::make('phone'),

                TextInput::make('designation'),

                TextInput::make('salary')
                    ->numeric(),

                DatePicker::make('joining_date'),
                
                Hidden::make('role')->default('employee'),
            ]);
    }
}
