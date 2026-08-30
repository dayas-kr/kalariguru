<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('name_ml')
                    ->required(),
                TextInput::make('slug'),
                TextInput::make('description_ml'),
                TextInput::make('description_en'),
            ]);
    }
}
