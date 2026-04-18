<?php

namespace App\Filament\Resources\ModelActionPermissions\Pages;

use App\Filament\Resources\ModelActionPermissions\ModelActionPermissionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListModelActionPermissions extends ListRecords
{
    protected static string $resource = ModelActionPermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
