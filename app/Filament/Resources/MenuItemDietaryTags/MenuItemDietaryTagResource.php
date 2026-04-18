<?php

namespace App\Filament\Resources\MenuItemDietaryTags;

use App\Filament\Resources\MenuItemDietaryTags\Pages\CreateMenuItemDietaryTag;
use App\Filament\Resources\MenuItemDietaryTags\Pages\EditMenuItemDietaryTag;
use App\Filament\Resources\MenuItemDietaryTags\Pages\ListMenuItemDietaryTags;
use App\Filament\Resources\MenuItemDietaryTags\Schemas\MenuItemDietaryTagForm;
use App\Filament\Resources\MenuItemDietaryTags\Tables\MenuItemDietaryTagsTable;
use App\Models\MenuItemDietaryTag;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MenuItemDietaryTagResource extends Resource
{
    protected static ?string $model = MenuItemDietaryTag::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return MenuItemDietaryTagForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MenuItemDietaryTagsTable::configure($table);
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
            'index' => ListMenuItemDietaryTags::route('/'),
            'create' => CreateMenuItemDietaryTag::route('/create'),
            'edit' => EditMenuItemDietaryTag::route('/{record}/edit'),
        ];
    }
}
