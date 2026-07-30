<?php

namespace App\Filament\Resources\Tasks\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class TaskForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('project_id')
                    ->label('Project')
                    ->relationship('project', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('users')
                    ->label('Assign Employees')
                    ->relationship(
                        'users',
                        'name',
                        fn ($query) => $query->role('employee')
                    )
                    ->multiple()
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('title')
                    ->label('Task Name')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(5),

                // FileUpload::make('image')
                //     ->label('Task Image')
                //     ->image()
                //     ->directory('tasks'),
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


                Select::make('status')
                    ->options([
                        'Not Started' => 'Not Started',
                        'In Progress' => 'In Progress',
                        'Completed' => 'Completed',
                        'On Hold' => 'On Hold',
                    ])
                    ->default('Not Started')
                    ->required(),

                Select::make('priority')
                    ->options([
                        'Low' => 'Low',
                        'Medium' => 'Medium',
                        'High' => 'High',
                    ])
                    ->default('Medium')
                    ->required(),

                TextInput::make('progress')
                    ->numeric()
                    ->default(0)
                    ->suffix('%')
                    ->minValue(0)
                    ->maxValue(100),

                DatePicker::make('start_date')
                    ->label('Start Date'),

                DatePicker::make('due_date')
                    ->label('Due Date'),

            ]);
    }
}