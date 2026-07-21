<?php

namespace App\Filament\Developer\Resources\Tasks\Pages;

use App\Filament\Developer\Resources\Tasks\TaskResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTask extends CreateRecord
{
    protected static string $resource = TaskResource::class;
}
