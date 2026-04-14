<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;


class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                    TextInput::make('title')->required(),

                    Textarea::make('description'),

                    TextInput::make('client_name'),

                    Select::make('status')
                        ->options([
                            'pending' => 'Pending',
                            'in_progress' => 'In Progress',
                            'completed' => 'Completed',
                            'on_hold' => 'On Hold',
                        ])
                        ->default('pending'),

                    Select::make('priority')
                        ->options([
                            'low' => 'Low',
                            'medium' => 'Medium',
                            'high' => 'High',
                        ])
                        ->default('medium'),

                    TextInput::make('progress')
                        ->numeric()
                        ->minValue(0)
                        ->maxValue(100)
                        ->default(0),

                    Select::make('users')
                            ->relationship('users', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->label('Assign Users'),

                    DatePicker::make('start_date')
                     ->required(),

                     DatePicker::make('deadline') 
                        ->label('End Date')
                        ->afterOrEqual('start_date') 
                        ->minDate(fn ($get) => $get('start_date')), 

                    TextInput::make('budget')->numeric(),

                    Textarea::make('notes'),

            ]);
    }
}
