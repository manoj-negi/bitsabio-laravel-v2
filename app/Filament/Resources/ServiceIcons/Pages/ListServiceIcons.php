<?php

namespace App\Filament\Resources\ServiceIcons\Pages;

use App\Filament\Resources\ServiceIcons\ServiceIconResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServiceIcons extends ListRecords
{
    protected static string $resource = ServiceIconResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
