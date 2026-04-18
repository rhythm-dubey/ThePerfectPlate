<?php

namespace App\Filament\Resources\DietaryTags\Pages;

use App\Filament\Resources\DietaryTags\DietaryTagResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDietaryTag extends EditRecord
{
    protected static string $resource = DietaryTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
