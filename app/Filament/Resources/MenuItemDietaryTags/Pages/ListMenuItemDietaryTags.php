<?php

namespace App\Filament\Resources\MenuItemDietaryTags\Pages;

use App\Filament\Resources\MenuItemDietaryTags\MenuItemDietaryTagResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMenuItemDietaryTags extends ListRecords
{
    protected static string $resource = MenuItemDietaryTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
