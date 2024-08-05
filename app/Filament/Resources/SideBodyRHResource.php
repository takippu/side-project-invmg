<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SideBodyRHResource\Pages;
use App\Filament\Resources\SideBodyRHResource\RelationManagers;
use App\Models\side_body_rh;
use App\Models\SideBodyRH;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SideBodyRHResource extends Resource
{
    protected static ?string $model = side_body_rh::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Side Body RH';
    protected static ?string $modelLabel = 'Side Body RH';
    protected static ?int $navigationSort = 10;


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
            'index' => Pages\ListSideBodyRHS::route('/'),
            'create' => Pages\CreateSideBodyRH::route('/create'),
            'edit' => Pages\EditSideBodyRH::route('/{record}/edit'),
        ];
    }
}
