<?php

namespace App\Filament\Resources\Interns\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Hidden;
use Spatie\Permission\Models\Role;
use Filament\Forms\Components\Select;

class InternForm
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
                    ->default(
                        Role::where('name', 'intern')->first()?->id
                    )
                    ->disabled(),

                TextInput::make('phone'),

                TextInput::make('designation'),

                DatePicker::make('joining_date')
                    ->label('Joining Date')
                    ->native(false)
                    ->required(),

                DatePicker::make('leaving_date')
                    ->label('Leaving Date')
                    ->native(false)
                    ->afterOrEqual('joining_date'),

                Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->default('active')
                    ->native(false)
                    ->required(),

                Textarea::make('notes'),

                Textarea::make('intern_details_view')
                        ->label('Intern Details')
                        ->disabled()
                        ->formatStateUsing(function ($record) {

                            if (! $record?->intern_details) {
                                return null;
                            }

                            return collect($record->intern_details)
                                ->map(fn ($value, $key) => ucfirst(str_replace('_', ' ', $key)) . ': ' . $value)
                                ->implode("\n");
                        })
                        ->rows(5)
                        ->visible(fn ($record) => ! empty($record?->intern_details)),

            ]);
    }
}