<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoofAssyResource\Pages;
use App\Filament\Resources\RoofAssyResource\RelationManagers;
use App\Models\roof_assy;
use App\Models\RoofAssy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoofAssyResource extends Resource
{
    protected static ?string $model = roof_assy::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Roof Assy';
    protected static ?string $modelLabel = 'Roof Assy';
    protected static ?int $navigationSort = 5;

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
            'index' => Pages\ListRoofAssies::route('/'),
            'create' => Pages\CreateRoofAssy::route('/create'),
            'edit' => Pages\EditRoofAssy::route('/{record}/edit'),
        ];
    }
}
