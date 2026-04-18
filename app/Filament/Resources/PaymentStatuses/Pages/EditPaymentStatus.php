<?php

namespace App\Filament\Resources\PaymentStatuses\Pages;

use App\Filament\Resources\PaymentStatuses\PaymentStatusResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPaymentStatus extends EditRecord
{
    protected static string $resource = PaymentStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
