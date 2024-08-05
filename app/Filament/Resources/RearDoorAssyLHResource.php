<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RearDoorAssyLHResource\Pages;
use App\Filament\Resources\RearDoorAssyLHResource\RelationManagers;
use App\Models\rear_door_assy_lh;
use App\Models\RearDoorAssyLH;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RearDoorAssyLHResource extends Resource
{
    protected static ?string $model = rear_door_assy_lh::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Rear Door Assy LH';
    protected static ?string $modelLabel = 'Rear Door Assy LH';
    protected static ?int $navigationSort = 15;

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
            'index' => Pages\ListRearDoorAssyLHS::route('/'),
            'create' => Pages\CreateRearDoorAssyLH::route('/create'),
            'edit' => Pages\EditRearDoorAssyLH::route('/{record}/edit'),
        ];
    }
}
