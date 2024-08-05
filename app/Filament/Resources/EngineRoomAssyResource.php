<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EngineRoomAssyResource\Pages;
use App\Filament\Resources\EngineRoomAssyResource\RelationManagers;
use App\Models\engine_room_assy;
use App\Models\EngineRoomAssy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EngineRoomAssyResource extends Resource
{
    protected static ?string $model = engine_room_assy::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Engine Room Assy';
    protected static ?string $modelLabel = 'Engine Room Assy';
    protected static ?int $navigationSort = 9;




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
            'index' => Pages\ListEngineRoomAssies::route('/'),
            'create' => Pages\CreateEngineRoomAssy::route('/create'),
            'edit' => Pages\EditEngineRoomAssy::route('/{record}/edit'),
        ];
    }
}
