<?php

namespace App\Filament\Resources\RolePermissions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RolePermissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('role_id')
                    ->required()
                    ->numeric(),
                TextInput::make('model_action_permission_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
