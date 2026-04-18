<?php

namespace App\Filament\Resources\Actions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ActionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('type')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
