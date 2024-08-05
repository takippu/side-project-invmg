<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RearDoorAssyRHResource\Pages;
use App\Filament\Resources\RearDoorAssyRHResource\RelationManagers;
use App\Models\rear_door_assy_rh;
use App\Models\RearDoorAssyRH;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RearDoorAssyRHResource extends Resource
{
    protected static ?string $model = rear_door_assy_rh::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Rear Door Assy RH';
    protected static ?string $modelLabel = 'Rear Door Assy RH';
    protected static ?int $navigationSort = 16;

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
            'index' => Pages\ListRearDoorAssyRHS::route('/'),
            'create' => Pages\CreateRearDoorAssyRH::route('/create'),
            'edit' => Pages\EditRearDoorAssyRH::route('/{record}/edit'),
        ];
    }
}
