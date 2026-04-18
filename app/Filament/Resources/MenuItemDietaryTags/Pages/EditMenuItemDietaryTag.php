<?php

namespace App\Filament\Resources\MenuItemDietaryTags\Pages;

use App\Filament\Resources\MenuItemDietaryTags\MenuItemDietaryTagResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMenuItemDietaryTag extends EditRecord
{
    protected static string $resource = MenuItemDietaryTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
