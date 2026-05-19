<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('type')
                ->options([
                    'blog' => 'Blog',
                    'course' => 'Course',
                    'service' => 'Service',
                ])
                ->live()
                ->required(),

               TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, $set) =>
                                $set('slug', Str::slug($state))
                            ),

            TextInput::make('slug')
                ->unique(ignoreRecord: true)
                ->required(),             
                
            Select::make('status')
                ->options([
                    'draft' => 'Draft',
                    'published' => 'Published',
                ])
                ->default('draft'),

            Textarea::make('short_description'),

             Textarea::make('description'),

        //  course

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
        
        // course hero section

            TextInput::make('hero_title_black')
                ->visible(fn (Get $get) =>
                    in_array($get('type'), ['course'])
                ),

            TextInput::make('hero_title_blue')
                ->visible(fn (Get $get) =>
                    in_array($get('type'), ['course'])
                ),

            Textarea::make('hero_description')
                ->visible(fn (Get $get) =>
                    in_array($get('type'), ['course'])
                ),

                FileUpload::make('hero_image')
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->nullable()
                    ->maxSize(5120)
                    ->visible(fn (Get $get) => in_array($get('type'), ['course']))
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
        //   blog

            TextInput::make('category')
                ->visible(fn (Get $get) => $get('type') === 'blog'),

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
           TextInput::make('author')
                    ->disabled()
                    ->dehydrated()
                    ->afterStateHydrated(function ($component) {
                        $component->state(auth()->user()?->name);
                    })
                    ->dehydrateStateUsing(function () {
                        return auth()->user()?->name;
                    })
                    ->required(),
            // meta tag

            TextInput::make('tags.meta.title')
                ->label('Meta Title'),


            TextInput::make('tags.meta.keywords')
                ->label('Meta Keywords'),


            Textarea::make('tags.meta.description')
                 ->label('Meta Description'),


            TextInput::make('tags.meta.canonical')
                  ->label('Canonical URL'),


            Select::make('tags.meta.robots')
                    ->label('Robots')
                    ->options([
                        'index, follow' => 'Index, Follow',
                        'noindex, follow' => 'NoIndex, Follow',
                        'index, nofollow' => 'Index, NoFollow',
                        'noindex, nofollow' => 'NoIndex, NoFollow',
                        ]),
                   


            //  og tag 

            TextInput::make('tags.open_graph.title')
                    ->label('Open Graph Title'),


            Textarea::make('tags.open_graph.description')
                    ->label('Open Graph Description'),
                     

            TextInput::make('tags.open_graph.url')
                    ->label('Open Graph URL'),
                        

            Select::make('tags.open_graph.type')
                    ->label('Open Graph Type')
                    ->options([
                        'article' => 'Article',
                        'website' => 'Website',
                        ]),
            
            Textarea::make('content')
                    ->rows(5)
                    ->columnSpanFull(),
                    
        ]);

    }
}


