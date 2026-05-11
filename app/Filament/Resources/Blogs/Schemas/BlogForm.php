<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\Hidden;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema 
            ->components([
                   Hidden::make('user_id')
                    ->default(auth()->id()),

                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) =>
                        $set('slug', \Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('category'),

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

                FileUpload::make('image')
                    ->image()
                    ->nullable()
                    ->maxSize(5120)
                    ->imageEditor(false)

                    ->getUploadedFileNameForStorageUsing(
                        function (TemporaryUploadedFile $file): string {

                            $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                            $name = Str::slug(Str::lower($name));

                            $extension = strtolower($file->getClientOriginalExtension());

                            return time() . '-' . $name . '.' . $extension;
                        }
                    ),

                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])
                    ->default('draft'),

                     
                Forms\Components\TextInput::make('tags.meta.meta_title')
                    ->label('Meta Title')
                    ->maxLength(60),

                Forms\Components\TextInput::make('tags.meta.keywords')
                    ->label('Meta Keywords'),
                    
                Forms\Components\Textarea::make('tags.meta.description')
                    ->label('Meta Description')
                    ->rows(3)
                    ->maxLength(160),

                Forms\Components\TextInput::make('tags.meta.canonical')
                    ->label('Canonical URL'),

                Forms\Components\Select::make('tags.meta.robots')
                    ->label('Robots')
                    ->options([
                        'index, follow' => 'Index, Follow',
                        'noindex, nofollow' => 'No Index, No Follow',
                    ])
                    ->default('index, follow'),

               
                Forms\Components\TextInput::make('tags.open_graph.title')
                    ->label('Open Graph Title'),

                Forms\Components\Textarea::make('tags.open_graph.description')
                    ->label('Open Graph Description')
                    ->rows(3),

                Forms\Components\TextInput::make('tags.open_graph.url')
                    ->label('Open Graph URL'),

                Forms\Components\Select::make('tags.open_graph.type')
                    ->label('Open Graph Type')
                    ->options([
                        'website' => 'Website',
                        'article' => 'Article',
                    ])
                    ->default('article'),


                    RichEditor::make('content')
                    ->columnSpanFull()
                    ->required(),

            ]);
    }
}

