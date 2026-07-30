<?php

namespace App\Filament\Resources\InterviewQuestions\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class InterviewQuestionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
               
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->nullable()
                    ->maxSize(5120)
                    ->imageEditor(false)

                    ->getUploadedFileNameForStorageUsing(
                        function (TemporaryUploadedFile $file): string {
                            $name = pathinfo(
                                $file->getClientOriginalName(),
                                PATHINFO_FILENAME
                            );
                            $name = Str::slug($name);
                            $extension = $file->getClientOriginalExtension();
                            return time() . '-' . $name . '.' . $extension;
                        }
                    )
                    ->getUploadedFileUsing(
                            function ($file): ?array {

                                if (! $file) {
                                    return null;
                                }

                                return [
                                    'name' => $file,

                                    'size' => filesize(
                                        storage_path('app/public/' . $file)
                                    ),

                                    'type' => mime_content_type(
                                        storage_path('app/public/' . $file)
                                    ),

                                     'url' => url('/public/storage/' . $file),
                                ];
                            }
                    ),
                TextInput::make('average_salary')
                        ->label('Average Salary Package')
                        ->columnSpanFull(),


                Textarea::make('short_description')
                    ->label('Short Description')
                    ->rows(4)
                    ->columnSpanFull(),

                Repeater::make('content')
                    ->label('Interview Questions')
                    ->schema([
                        TextInput::make('question')
                            ->label('Question')
                            ->required()
                            ->columnSpanFull(),

                        RichEditor::make('answer')
                            ->label('Answer')
                            ->required()
                            ->columnSpanFull(),

                        Textarea::make('code')
                            ->label('Code Example')
                            ->rows(10)
                            ->columnSpanFull()
                            ->helperText('Optional - Paste HTML, CSS, PHP, JavaScript, Python, etc.'),
                    ])
                    ->addActionLabel('Add Question')
                    ->collapsed()
                    ->reorderable()
                    ->columnSpanFull(),

                TextInput::make('priority')
                    ->numeric()
                    ->default(0)
                    ->required(),

                Toggle::make('status')
                    ->default(true),

                //
            ]);
    }
}