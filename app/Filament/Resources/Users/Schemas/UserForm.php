<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                TextInput::make('email')
                    ->email()
                    ->required(),

                TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => bcrypt($state))
                    ->required(fn ($context) => $context === 'create')
                    ->hiddenOn('edit'),

                Select::make('role_id')
                    ->label('Role')
                    ->relationship('role', 'name')
                    ->required(),

                TextInput::make('phone'),

                TextInput::make('designation'),

                TextInput::make('salary')
                    ->numeric(),

                DatePicker::make('joining_date')
                    ->label('Joining Date')
                    ->required(),

                DatePicker::make('leaving_date')
                    ->label('Leaving Date')
                    ->afterOrEqual('joining_date'),

                TextInput::make('number_of_leaves')
                    ->numeric()
                    ->default(5),

                Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->default('active'),

                Textarea::make('notes'),
]);
    }
}
