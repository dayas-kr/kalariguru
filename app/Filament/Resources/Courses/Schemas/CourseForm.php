<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('name_ml'),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('description_ml'),
                TextInput::make('description_en'),
                TextInput::make('duration'),
                TextInput::make('semester_count')->numeric(),
                FileUpload::make('image')
                    ->image()
                    ->directory('courses')
                    ->disk('public')
            ]);
    }
}
