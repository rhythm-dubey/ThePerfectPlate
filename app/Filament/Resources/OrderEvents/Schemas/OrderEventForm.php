<?php

namespace App\Filament\Resources\OrderEvents\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OrderEventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('order_id')
                    ->required()
                    ->numeric(),
                TextInput::make('event_id')
                    ->required()
                    ->numeric(),
                TextInput::make('event_name')
                    ->default(null),
                DateTimePicker::make('start_datetime')
                    ->required(),
                DateTimePicker::make('end_datetime')
                    ->required(),
                TextInput::make('venue_address')
                    ->default(null),
                TextInput::make('guest_count')
                    ->required()
                    ->numeric()
                    ->default(0),
                Textarea::make('special_instructions')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('display_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
