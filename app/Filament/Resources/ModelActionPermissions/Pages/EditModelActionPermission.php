<?php

namespace App\Filament\Resources\ModelActionPermissions\Pages;

use App\Filament\Resources\ModelActionPermissions\ModelActionPermissionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditModelActionPermission extends EditRecord
{
    protected static string $resource = ModelActionPermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
