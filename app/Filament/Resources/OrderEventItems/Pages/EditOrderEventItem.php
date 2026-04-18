<?php

namespace App\Filament\Resources\OrderEventItems\Pages;

use App\Filament\Resources\OrderEventItems\OrderEventItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOrderEventItem extends EditRecord
{
    protected static string $resource = OrderEventItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
