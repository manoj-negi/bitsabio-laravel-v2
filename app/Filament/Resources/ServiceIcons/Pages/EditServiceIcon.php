<?php

namespace App\Filament\Resources\ServiceIcons\Pages;

use App\Filament\Resources\ServiceIcons\ServiceIconResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServiceIcon extends EditRecord
{
    protected static string $resource = ServiceIconResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
