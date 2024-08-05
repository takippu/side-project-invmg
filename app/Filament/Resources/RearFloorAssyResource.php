<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RearFloorAssyResource\Pages;
use App\Filament\Resources\RearFloorAssyResource\RelationManagers;
use App\Models\rear_floor_assy;
use App\Models\RearFloorAssy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RearFloorAssyResource extends Resource
{
    protected static ?string $model = rear_floor_assy::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Rear Floor Assy';
    protected static ?string $modelLabel = 'Rear Floor Assy';
    protected static ?int $navigationSort = 7;

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
            'index' => Pages\ListRearFloorAssies::route('/'),
            'create' => Pages\CreateRearFloorAssy::route('/create'),
            'edit' => Pages\EditRearFloorAssy::route('/{record}/edit'),
        ];
    }
}
