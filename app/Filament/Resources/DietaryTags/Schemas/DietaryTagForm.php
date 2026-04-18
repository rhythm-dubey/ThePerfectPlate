<?php

namespace App\Filament\Resources\DietaryTags\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DietaryTagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('color')
                    ->default(null),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
