<?php

namespace App\Filament\Resources\OrderEventItems\Pages;

use App\Filament\Resources\OrderEventItems\OrderEventItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderEventItem extends CreateRecord
{
    protected static string $resource = OrderEventItemResource::class;
}
