<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoofRailAssyResource\Pages;
use App\Filament\Resources\RoofRailAssyResource\RelationManagers;
use App\Models\roof_rail_assy;
use App\Models\RoofRailAssy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoofRailAssyResource extends Resource
{
    protected static ?string $model = roof_rail_assy::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Roof Rail Assy';
    protected static ?string $modelLabel = 'Roof Rail Assy';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListRoofRailAssies::route('/'),
            'create' => Pages\CreateRoofRailAssy::route('/create'),
            'edit' => Pages\EditRoofRailAssy::route('/{record}/edit'),
        ];
    }
}
