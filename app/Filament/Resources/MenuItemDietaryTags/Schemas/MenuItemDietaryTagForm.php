<?php

namespace App\Filament\Resources\MenuItemDietaryTags\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MenuItemDietaryTagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('menu_item_id')
                    ->required()
                    ->numeric(),
                TextInput::make('dietary_tag_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
