<?php

namespace App\Filament\Resources\OrderEventItems;

use App\Filament\Resources\OrderEventItems\Pages\CreateOrderEventItem;
use App\Filament\Resources\OrderEventItems\Pages\EditOrderEventItem;
use App\Filament\Resources\OrderEventItems\Pages\ListOrderEventItems;
use App\Filament\Resources\OrderEventItems\Schemas\OrderEventItemForm;
use App\Filament\Resources\OrderEventItems\Tables\OrderEventItemsTable;
use App\Models\OrderEventItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrderEventItemResource extends Resource
{
    protected static ?string $model = OrderEventItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return OrderEventItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrderEventItemsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOrderEventItems::route('/'),
            'create' => CreateOrderEventItem::route('/create'),
            'edit' => EditOrderEventItem::route('/{record}/edit'),
        ];
    }
}
