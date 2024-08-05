<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FRDoorAssyLHResource\Pages;
use App\Filament\Resources\FRDoorAssyLHResource\RelationManagers;
use App\Models\fr_door_assy_lh;
use App\Models\FRDoorAssyLH;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FRDoorAssyLHResource extends Resource
{
    protected static ?string $model = fr_door_assy_lh::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'FR Door Assy LH';
    protected static ?string $modelLabel = 'FR Door Assy LH';
    protected static ?int $navigationSort = 13;

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
            'index' => Pages\ListFRDoorAssyLHS::route('/'),
            'create' => Pages\CreateFRDoorAssyLH::route('/create'),
            'edit' => Pages\EditFRDoorAssyLH::route('/{record}/edit'),
        ];
    }
}
