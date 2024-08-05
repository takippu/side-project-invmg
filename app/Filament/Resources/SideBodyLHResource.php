<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SideBodyLHResource\Pages;
use App\Filament\Resources\SideBodyLHResource\RelationManagers;
use App\Models\side_body_lh;
use App\Models\SideBodyLH;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SideBodyLHResource extends Resource
{
    protected static ?string $model = side_body_lh::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'Side Body LH';
    protected static ?string $modelLabel = 'Side Body LH';
    protected static ?int $navigationSort = 11;


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
            'index' => Pages\ListSideBodyLHS::route('/'),
            'create' => Pages\CreateSideBodyLH::route('/create'),
            'edit' => Pages\EditSideBodyLH::route('/{record}/edit'),
        ];
    }
}
