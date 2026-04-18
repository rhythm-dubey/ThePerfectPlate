<?php

namespace App\Filament\Resources\DietaryTags\Pages;

use App\Filament\Resources\DietaryTags\DietaryTagResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDietaryTags extends ListRecords
{
    protected static string $resource = DietaryTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
