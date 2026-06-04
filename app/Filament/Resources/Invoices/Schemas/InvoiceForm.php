<?php

namespace App\Filament\Resources\Invoices\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;

class InvoiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('invoice_no')
                    ->disabled()
                    ->dehydrated(),

                Select::make('customer_id')
                    ->relationship('customer', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                DatePicker::make('invoice_date')
                    ->default(now())
                    ->required(),

                DatePicker::make('due_date'),

                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('draft'),

                Repeater::make('items')
                    ->relationship()
                    ->schema([

                        TextInput::make('description')
                            ->required(),

                        TextInput::make('quantity')
                            ->numeric()
                            ->default(1)
                            ->required(),

                        TextInput::make('rate')
                            ->numeric()
                            ->default(0)
                            ->required(),

                        TextInput::make('amount')
                            ->numeric()
                            ->default(0),

                    ])
                    ->columns(4)
                    ->defaultItems(1)
                    ->columnSpanFull(),

                TextInput::make('subtotal')
                    ->numeric()
                    ->default(0),

                TextInput::make('tax_percentage')
                    ->numeric()
                    ->default(0),

                TextInput::make('tax_amount')
                    ->numeric()
                    ->default(0),

                TextInput::make('shipping')
                    ->numeric()
                    ->default(0),

                TextInput::make('discount')
                    ->numeric()
                    ->default(0),

                TextInput::make('total')
                    ->numeric()
                    ->default(0),

                TextInput::make('amount_paid')
                    ->numeric()
                    ->default(0),

                TextInput::make('balance_due')
                    ->numeric()
                    ->default(0),

                Textarea::make('notes'),

                Textarea::make('terms'),

            ]);
    }
}