<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FrontFloorAssyResource\Pages;
use App\Filament\Resources\FrontFloorAssyResource\RelationManagers;
use App\Models\front_floor_assy;
use App\Models\FrontFloorAssy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FrontFloorAssyResource extends Resource
{
    protected static ?string $model = front_floor_assy::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Front Floor Assy';
    protected static ?string $modelLabel = 'Front Floor Assy';
    protected static ?int $navigationSort = 8;


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
            'index' => Pages\ListFrontFloorAssies::route('/'),
            'create' => Pages\CreateFrontFloorAssy::route('/create'),
            'edit' => Pages\EditFrontFloorAssy::route('/{record}/edit'),
        ];
    }
}
