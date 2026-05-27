<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use App\Models\Role;
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
                    ->required()
                    ->unique(ignoreRecord: true),
                    

                TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => bcrypt($state))
                    ->required(fn ($context) => $context === 'create')
                    ->hiddenOn('edit'),

                Select::make('roles')
                    ->label('Role')
                    ->relationship('roles', 'name')
                    ->options(
                        Role::pluck('name', 'id')
                    )
                    ->required()
                    ->multiple(),

                
                TextInput::make('phone'),

                TextInput::make('designation'),

                TextInput::make('salary')
                    ->numeric(),

                DatePicker::make('joining_date')
                    ->label('Joining Date')
                    ->native(false)
                    ->required(),

                DatePicker::make('leaving_date')
                    ->label('Leaving Date')
                    ->native(false)
                    ->afterOrEqual('joining_date'),

                
                TextInput::make('number_of_leaves')
                    ->numeric()
                    ->default(5),

                Select::make('status')
                        ->options([
                            'active' => 'Active',
                            'inactive' => 'Inactive',
                        ])
                        ->native(false)
                        ->default('active')
                        ->required(),


                Textarea::make('notes'),
]);
    }
}
