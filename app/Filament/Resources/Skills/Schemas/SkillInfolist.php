<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SkillInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('name_ml'),
                TextEntry::make('slug')
                    ->placeholder('-'),
                TextEntry::make('description_ml')
                    ->placeholder('-'),
                TextEntry::make('description_en')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
