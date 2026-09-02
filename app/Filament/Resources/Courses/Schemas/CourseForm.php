<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Course Title')
                    ->required(),
                TextInput::make('name_ml')->label('Malayalam Course Title'),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('price')
                    ->numeric()
                    ->prefix('₹')
                    ->required(),
                TextInput::make('semester_count')->numeric(),
                TextInput::make('duration'),
                Textarea::make('description_en')->label('Description')->columnSpanFull(),
                Textarea::make('description_ml')->label('Malayalam Description')->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->directory('courses')
                    ->disk('public')
                    ->columnSpanFull(),
            ]);
    }
}
