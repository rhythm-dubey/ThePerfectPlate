<?php

namespace App\Filament\Resources\OrderEventItems\Pages;

use App\Filament\Resources\OrderEventItems\OrderEventItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOrderEventItems extends ListRecords
{
    protected static string $resource = OrderEventItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
