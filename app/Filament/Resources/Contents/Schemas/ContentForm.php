<?php

namespace App\Filament\Resources\Contents\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('hero_title_black')
                    ->label('Hero Title Black'),

                TextInput::make('hero_title_blue')
                    ->label('Hero Title Blue'),

                Textarea::make('hero_description')
                    ->rows(4),

                FileUpload::make('hero_image')
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



                // FileUpload::make('hero_image')
                //     ->directory('hero-images')
                //     ->disk('public')
                //     ->visibility('public')
                //     ->nullable()
                //     ->maxSize(5120)
                //     ->imageEditor(false)

                //     ->getUploadedFileNameForStorageUsing(
                //         function (TemporaryUploadedFile $file): string {

                //             $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                //             $name = Str::slug(Str::lower($name));

                //             $extension = strtolower($file->getClientOriginalExtension());

                //             return time() . '-' . $name . '.' . $extension;
                //         }
                //     ),

                Select::make('type')
                ->options([
                    'course' => 'Course',
                    'service' => 'Service',
                ])
                ->required()
                ->live(),
                

                TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', Str::slug($state))
                ),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            Textarea::make('short_description')
                ->rows(3),

            // RichEditor::make('description')
            //     ->columnSpanFull(),

            Textarea::make('description')
                    ->rows(20)
                    ->columnSpanFull(),
                    
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

            Select::make('duration')
                ->options([
                            '1 Month'  => '1 Month',
                            '2 Months' => '2 Months',
                            '3 Months' => '3 Months',
                            '4 Months' => '4 Months',
                            '5 Months' => '5 Months',
                            '6 Months' => '6 Months',
                            '7 Months' => '7 Months',
                            '8 Months' => '8 Months',
                            '9 Months' => '9 Months',
                            '10 Months' => '10 Months',
                            '11 Months' => '11 Months',
                            '12 Months' => '12 Months',
                       ])
                ->placeholder('6 Months')
                ->default('6 Months')
                ->required()
                ->visible(fn (Get $get): bool => $get('type') === 'course'),

            Select::make('level')
                ->options([
                    'Beginner' => 'Beginner',
                    'Intermediate' => 'Intermediate',
                    'Advanced' => 'Advanced',
                ])
                 ->visible(fn (Get $get): bool => $get('type') === 'course'),
        
            ]);
    }
}
