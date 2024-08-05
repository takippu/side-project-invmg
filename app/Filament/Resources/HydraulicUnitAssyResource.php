<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HydraulicUnitAssyResource\Pages;
use App\Filament\Resources\HydraulicUnitAssyResource\RelationManagers;
use App\Models\hydraulic_unit_assy;
use App\Models\HydraulicUnitAssy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HydraulicUnitAssyResource extends Resource
{
    protected static ?string $model = hydraulic_unit_assy::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Hydraulic Unit Assy';
    protected static ?string $modelLabel = 'Hydraulic Unit Assy';
    protected static ?int $navigationSort = 17;


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
            'index' => Pages\ListHydraulicUnitAssies::route('/'),
            'create' => Pages\CreateHydraulicUnitAssy::route('/create'),
            'edit' => Pages\EditHydraulicUnitAssy::route('/{record}/edit'),
        ];
    }
}
