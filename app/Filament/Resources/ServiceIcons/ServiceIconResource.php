<?php

namespace App\Filament\Resources\ServiceIcons;

use App\Filament\Resources\ServiceIcons\Pages\CreateServiceIcon;
use App\Filament\Resources\ServiceIcons\Pages\EditServiceIcon;
use App\Filament\Resources\ServiceIcons\Pages\ListServiceIcons;
use App\Filament\Resources\ServiceIcons\Schemas\ServiceIconForm;
use App\Filament\Resources\ServiceIcons\Tables\ServiceIconsTable;
use App\Models\ServiceIcon;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServiceIconResource extends Resource
{
    protected static ?string $model = ServiceIcon::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ServiceIconForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServiceIconsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServiceIcons::route('/'),
            'create' => CreateServiceIcon::route('/create'),
            'edit' => EditServiceIcon::route('/{record}/edit'),
        ];
    }
}
