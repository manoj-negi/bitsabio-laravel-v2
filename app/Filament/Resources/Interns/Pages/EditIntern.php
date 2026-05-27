<?php

namespace App\Filament\Resources\Interns\Pages;

use App\Filament\Resources\Interns\InternResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditIntern extends EditRecord
{
    protected static string $resource = InternResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
