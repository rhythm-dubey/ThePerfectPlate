<?php

namespace App\Filament\Resources\ModelActionPermissions;

use App\Filament\Resources\ModelActionPermissions\Pages\CreateModelActionPermission;
use App\Filament\Resources\ModelActionPermissions\Pages\EditModelActionPermission;
use App\Filament\Resources\ModelActionPermissions\Pages\ListModelActionPermissions;
use App\Filament\Resources\ModelActionPermissions\Schemas\ModelActionPermissionForm;
use App\Filament\Resources\ModelActionPermissions\Tables\ModelActionPermissionsTable;
use App\Models\ModelActionPermission;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ModelActionPermissionResource extends Resource
{
    protected static ?string $model = ModelActionPermission::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ModelActionPermissionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ModelActionPermissionsTable::configure($table);
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
            'index' => ListModelActionPermissions::route('/'),
            'create' => CreateModelActionPermission::route('/create'),
            'edit' => EditModelActionPermission::route('/{record}/edit'),
        ];
    }
}
