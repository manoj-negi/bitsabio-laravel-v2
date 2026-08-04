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
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TagsInput;
use Filament\Schemas\Components\Section;
use Filament\Widgets\StatsOverviewWidget\Stat;
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
                            in_array($get('type'), ['course','service'])
                    ),

                TextInput::make('hero_title_blue')
                        ->visible(fn (Get $get) =>
                        in_array($get('type'), ['course','service'])
                    ),  

                Textarea::make('hero_description')
                        ->visible(fn (Get $get) =>
                        in_array($get('type'), ['course','service'])
                    ),

                Select::make('serviceIcons')
                    ->relationship(
                        name: 'serviceIcons',
                        titleAttribute: 'name'
                    )
                    ->multiple()
                    ->searchable()
                    ->preload()
                    ->label('Service Icons')
                    ->visible(fn (Get $get): bool => $get('type') === 'course'),
                    
                Select::make('locations')
                    ->relationship('locations', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->visible(fn($get): bool=>$get('type')==='course'),

                FileUpload::make('hero_image')
                                ->image()
                                ->disk('public')
                                ->visibility('public')
                                ->nullable()
                                ->maxSize(5120)
                                ->visible(fn (Get $get) => in_array($get('type'), ['course','service']))
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
                //         ->image()
                //         ->disk('s3')
                //         ->directory('posts')
                //         ->visibility('public')
                //         ->getUploadedFileNameForStorageUsing(
                //             fn (TemporaryUploadedFile $file): string =>
                //                 time() . '-' .
                //                 Str::slug(
                //                     pathinfo(
                //                         $file->getClientOriginalName(),
                //                         PATHINFO_FILENAME
                //                     )
                //                 ) . '.' .
                //                 $file->getClientOriginalExtension()
                //         )
                //         ->dehydrateStateUsing(fn ($state) => basename($state))
                //         ->visible(fn (Get $get) => in_array($get('type'), ['course','service'])),

                       //   blog

                TextInput::make('category')
                        ->visible(fn (Get $get) => $get('type') === 'blog'),


                // FileUpload::make('image')
                //         ->image()
                //         ->disk('s3')
                //         ->directory('posts')
                //         ->visibility('public')
                //         ->getUploadedFileNameForStorageUsing(
                //             fn (TemporaryUploadedFile $file): string =>
                //                 time() . '-' .
                //                 Str::slug(pathinfo(
                //                     $file->getClientOriginalName(),
                //                     PATHINFO_FILENAME
                //                 )) . '.' .
                //                 $file->getClientOriginalExtension()
                //         )
                //         ->dehydrateStateUsing(fn ($state) => basename($state))
                //         ->formatStateUsing(fn ($state) => $state ? 'posts/' . $state : null),

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
                TextInput::make('average_salary.min_salary')
                    ->label('Minimum Salary')
                    ->placeholder('₹2,50,000 P.A'),

                TextInput::make('average_salary.max_salary')
                    ->label('Maximum Salary')
                    ->placeholder('₹18,00,000 P.A'),
                        
                Textarea::make('content')
                        ->rows(5)
                        ->columnSpanFull(),

                Section::make('Curriculum Preview')
                ->schema([

                Repeater::make('curriculum_preview')
                        ->label('Modules')
                        ->schema([

                            TextInput::make('title')
                                ->label('Module Title')
                                ->required(),
                                

                            Textarea::make('description')
                                ->label('Module Description')
                                ->required(),

                        ])
                        ->collapsible()
                        ->cloneable()
                        ->reorderable()
                        ->addActionLabel('Add Module')
                        ->columnSpanFull(),

                ])
                   ->columnSpanFull()
                    ->visible(fn (Get $get): bool => $get('type') === 'course'),

                Section::make('Projects You Will Build')
                ->schema([

                    Repeater::make('projects_you_will_build')
                        ->label('Projects')
                        ->schema([


                                    // FileUpload::make('image')
                                    //     ->image()
                                    //     ->directory('industry-projects'),

                    FileUpload::make('Projects_image')
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

                            
                            TextInput::make('title')
                                ->label('Project Title')
                                ->required(),

                            Textarea::make('description')
                                ->rows(3)
                                ->required(),
                        ])
                        ->collapsible()
                        ->cloneable()
                        ->reorderable()
                        ->addActionLabel('Add Project')
                        // ->columnSpanFull(),

                ])
                ->columnSpanFull()
                ->visible(fn (Get $get): bool => $get('type') === 'course'),

                // High-Growth Career Roles 
                Section::make('Career Roles')
                        ->schema([

                            Repeater::make('career_roles')
                                ->schema([
                                    TextInput::make('icon')
                                        ->label('Bootstrap Icon')
                                        ->required()
                                        ->placeholder('bi bi-cpu'),
                                    TextInput::make('title')
                                         ->required()
                                        ->label('Role Name'),

                                    TextInput::make('salary')
                                        ->required()
                                        ->label('Salary'),

                                    TextInput::make('subtitle')
                                        ->default('Average Global Salary')
                                        ->label('Subtitle'),

                                    // FileUpload::make('icon')
                                    //     ->image()
                                    //     ->disk('public')
                                    //     ->visibility('public'),

                                ])
                                ->cloneable()
                                ->collapsible()
                                ->reorderable()
                                ->addActionLabel('Add Career Role'),

                        ])
                        ->columnSpanFull()
                        ->visible(fn (Get $get): bool => $get('type') === 'course'),

                // Roadmap section 
                
                // Section::make('Interactive Roadmap')
                //     ->schema([

                //         Repeater::make('interactive_roadmap')
                //             ->schema([
                //                 TextInput::make('icon')
                //                     ->label('Bootstrap Icon')
                //                     ->required()
                //                     ->placeholder('bi bi-cpu'),                                
                //                 TextInput::make('title')
                //                     ->required(),

                //                 Textarea::make('description')
                //                     ->required(),

                //             ])
                //             ->columnSpanFull()
                //             ->collapsible()
                //             ->cloneable()
                //             ->reorderable()
                //             ->addActionLabel('Add Roadmap Item'),

                //     ])
                    // ->columnSpanFull()
                    // ->visible(fn (Get $get): bool => $get('type') === 'course'),

                Textarea::make('roadmap_content')
                    ->label('Roadmap Content')
                    ->rows(5)
                    ->columnSpanFull()
                    ->visible(fn (Get $get): bool => $get('type') === 'course'),
                  
                    // industry project 
                    Section::make('Industry Projects')
                        ->schema([

                            Repeater::make('industry_projects')
                                ->schema([

                                    // FileUpload::make('image')
                                    //     ->image()
                                    //     ->directory('industry-projects'),


                                FileUpload::make('industry_projects_image')
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

                                    TextInput::make('title')
                                        ->required(),

                                    Textarea::make('description')
                                        ->required(),

                                    TagsInput::make('tags'),

                                ])
                                ->columnSpanFull()
                                ->collapsible()
                                ->cloneable()
                                ->reorderable()
                                ->addActionLabel('Add Industry Project'),

                        ])
                        ->columnSpanFull()
                        ->visible(fn (Get $get): bool => $get('type') === 'course'),

                        //  faq 
                        Section::make('Course FAQs')
                                ->schema([

                        Repeater::make('faqs')
                                ->schema([  

                                    TextInput::make('question')
                                        ->label('Question')
                                        ->placeholder('e.g. Do I need prior programming experience?')
                                        ->required()
                                        ->columnSpanFull(),

                                    RichEditor::make('answer')
                                        ->label('Answer')
                                        ->required()
                                        ->toolbarButtons([
                                            'bold',
                                            'italic',
                                            'bulletList',
                                            'orderedList',
                                            'link',
                                            'undo',
                                            'redo',
                                        ])
                                        ->columnSpanFull(),

                                ])
                                ->columnSpanFull()
                                ->collapsible()
                                ->cloneable()
                                ->reorderable()
                                ->addActionLabel('Add FAQ'),

                        ])
                        ->columnSpanFull()
                        ->visible(fn (Get $get): bool => $get('type') === 'course'),

                            // curriculum hero section 
                    Repeater::make('curriculum_hero')
                                ->label('Curriculum Hero')
                                ->maxItems(1)
                                ->schema([

                                    TextInput::make('title')
                                        ->required(),

                                    Textarea::make('description')
                                        ->rows(4)
                                        ->required(),

                                    // FileUpload::make('image')
                                    //     ->image()
                                    //     ->disk('public')
                                    //     ->directory('curriculum-hero'),

                                  FileUpload::make('curriculum-hero_image')
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

                                ])
                                ->columnSpanFull()
                                ->visible(fn (Get $get): bool => $get('type') === 'course'),
                            
                                                    
        ]);

    }
}


