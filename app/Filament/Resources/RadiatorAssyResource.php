<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadiatorAssyResource\Pages;
use App\Filament\Resources\RadiatorAssyResource\RelationManagers;
use App\Models\radiator_assy;
use App\Models\RadiatorAssy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RadiatorAssyResource extends Resource
{
    protected static ?string $model = radiator_assy::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Radiator Assy';
    protected static ?string $modelLabel = 'Radiator Assy';
    protected static ?int $navigationSort = 18;

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
            'index' => Pages\ListRadiatorAssies::route('/'),
            'create' => Pages\CreateRadiatorAssy::route('/create'),
            'edit' => Pages\EditRadiatorAssy::route('/{record}/edit'),
        ];
    }
}
