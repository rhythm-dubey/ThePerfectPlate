<?php

namespace App\Filament\Resources\ModelActionPermissions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ModelActionPermissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('model_id')
                    ->required()
                    ->numeric(),
                TextInput::make('action_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
