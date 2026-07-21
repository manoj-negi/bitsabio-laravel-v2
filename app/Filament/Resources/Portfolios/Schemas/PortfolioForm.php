<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
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


                TextInput::make('problem_heading')
                    ->default('THE PROBLEM')
                    ->required(),

                Textarea::make('problem_description')
                    ->rows(4)
                    ->required(),

                TextInput::make('solution_heading')
                    ->default('OUR SOLUTION')
                    ->required(),

                Textarea::make('solution_description')
                    ->rows(4)
                    ->required(),

                Select::make('technologies')
                    ->multiple()
                    ->searchable()
                    ->options([
                        'PHP' => 'PHP',
                        'Laravel' => 'Laravel',
                        'CodeIgniter' => 'CodeIgniter',
                        'JavaScript' => 'JavaScript',
                        'jQuery' => 'jQuery',
                        'React JS' => 'React JS',
                        'Next JS' => 'Next JS',
                        'Vue JS' => 'Vue JS',
                        'Node JS' => 'Node JS',
                        'Express JS' => 'Express JS',
                        'Flutter' => 'Flutter',
                        'React Native' => 'React Native',
                        'Android' => 'Android',
                        'Java' => 'Java',
                        'Spring Boot' => 'Spring Boot',
                        'Python' => 'Python',
                        'Django' => 'Django',
                        'FastAPI' => 'FastAPI',
                        'MongoDB' => 'MongoDB',
                        'MySQL' => 'MySQL',
                        'PostgreSQL' => 'PostgreSQL',
                        'Firebase' => 'Firebase',
                        'AWS' => 'AWS',
                        'Docker' => 'Docker',
                        'GraphQL' => 'GraphQL',
                    ]),
                TextInput::make('result_title')
                    ->required(),

                Textarea::make('result_description')
                    ->rows(3)
                    ->required(),

                // Toggle::make('status')
                //     ->default(true),

            ]);
    }
}