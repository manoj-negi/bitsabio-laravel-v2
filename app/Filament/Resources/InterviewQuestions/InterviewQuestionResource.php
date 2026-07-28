<?php

namespace App\Filament\Resources\InterviewQuestions;

use App\Filament\Resources\InterviewQuestions\Pages\CreateInterviewQuestion;
use App\Filament\Resources\InterviewQuestions\Pages\EditInterviewQuestion;
use App\Filament\Resources\InterviewQuestions\Pages\ListInterviewQuestions;
use App\Filament\Resources\InterviewQuestions\Schemas\InterviewQuestionForm;
use App\Filament\Resources\InterviewQuestions\Tables\InterviewQuestionsTable;
use App\Models\InterviewQuestion;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InterviewQuestionResource extends Resource
{
    protected static ?string $model = InterviewQuestion::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return InterviewQuestionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InterviewQuestionsTable::configure($table);
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
            'index' => ListInterviewQuestions::route('/'),
            'create' => CreateInterviewQuestion::route('/create'),
            'edit' => EditInterviewQuestion::route('/{record}/edit'),
        ];
    }
}
