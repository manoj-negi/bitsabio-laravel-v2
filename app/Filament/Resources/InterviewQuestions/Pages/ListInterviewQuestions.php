<?php

namespace App\Filament\Resources\InterviewQuestions\Pages;

use App\Filament\Resources\InterviewQuestions\InterviewQuestionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInterviewQuestions extends ListRecords
{
    protected static string $resource = InterviewQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
