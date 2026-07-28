<?php

namespace App\Filament\Resources\InterviewQuestions\Pages;

use App\Filament\Resources\InterviewQuestions\InterviewQuestionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateInterviewQuestion extends CreateRecord
{
    protected static string $resource = InterviewQuestionResource::class;
}
