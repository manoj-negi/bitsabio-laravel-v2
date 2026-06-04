<?php

namespace App\Filament\Resources\Interns;

use App\Filament\Resources\Interns\Pages\CreateIntern;
use App\Filament\Resources\Interns\Pages\EditIntern;
use App\Filament\Resources\Interns\Pages\ListInterns;
use App\Filament\Resources\Interns\Schemas\InternForm;
use App\Filament\Resources\Interns\Tables\InternsTable;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class InternResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $modelLabel = 'Intern';
    protected static ?string $pluralModelLabel = 'Interns';
    protected static ?string $navigationLabel = 'Interns';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;

    protected static ?string $recordTitleAttribute = 'name';

    protected static string | \UnitEnum | null $navigationGroup = 'Users';
    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return InternForm::configure($schema);
    }
    
    public static function table(Table $table): Table
    {
        return InternsTable::configure($table);
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
            'index' => ListInterns::route('/'),
            'create' => CreateIntern::route('/create'),
            'edit' => EditIntern::route('/{record}/edit'),
        ];
    }
        public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereHas('roles', function ($query) {
                $query->where('name', 'Intern');
            });
    }
}
