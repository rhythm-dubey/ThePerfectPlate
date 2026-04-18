<?php

namespace App\Filament\Resources\DietaryTags;

use App\Filament\Resources\DietaryTags\Pages\CreateDietaryTag;
use App\Filament\Resources\DietaryTags\Pages\EditDietaryTag;
use App\Filament\Resources\DietaryTags\Pages\ListDietaryTags;
use App\Filament\Resources\DietaryTags\Schemas\DietaryTagForm;
use App\Filament\Resources\DietaryTags\Tables\DietaryTagsTable;
use App\Models\DietaryTag;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DietaryTagResource extends Resource
{
    protected static ?string $model = DietaryTag::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return DietaryTagForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DietaryTagsTable::configure($table);
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
            'index' => ListDietaryTags::route('/'),
            'create' => CreateDietaryTag::route('/create'),
            'edit' => EditDietaryTag::route('/{record}/edit'),
        ];
    }
}
