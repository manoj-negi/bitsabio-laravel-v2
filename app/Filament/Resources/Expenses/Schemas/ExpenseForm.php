<?php

namespace App\Filament\Resources\Expenses\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class ExpenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('title')
                    ->required(),

                TextInput::make('amount')
                    ->numeric()
                    ->required(),

                Select::make('category')
                    ->options([
                        'Internet' => 'Internet',
                        'Rent' => 'Rent',
                        'Software' => 'Software',
                        'Travel' => 'Travel',
                        'Salary' => 'Salary',
                    ])
                    ->searchable()
                    ->required(),

                DatePicker::make('expense_date')
                    ->required(),

                DatePicker::make('start_date'),

                DatePicker::make('end_date'),

            ]);
    }
}
