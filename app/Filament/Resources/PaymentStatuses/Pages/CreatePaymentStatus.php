<?php

namespace App\Filament\Resources\PaymentStatuses\Pages;

use App\Filament\Resources\PaymentStatuses\PaymentStatusResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymentStatus extends CreateRecord
{
    protected static string $resource = PaymentStatusResource::class;
}
