<?php

namespace App\Filament\Resources\InterviewQuestions\Pages;

use App\Filament\Resources\InterviewQuestions\InterviewQuestionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInterviewQuestion extends EditRecord
{
    protected static string $resource = InterviewQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
