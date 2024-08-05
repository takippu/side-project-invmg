<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FRStrutLHResource\Pages;
use App\Filament\Resources\FRStrutLHResource\RelationManagers;
use App\Models\fr_strut_lh;
use App\Models\FRStrutLH;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FRStrutLHResource extends Resource
{
    protected static ?string $model = fr_strut_lh::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'FR Strut LH';
    protected static ?string $modelLabel = 'FR Strut LH';
    protected static ?int $navigationSort = 3;

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
            'index' => Pages\ListFRStrutLHS::route('/'),
            'create' => Pages\CreateFRStrutLH::route('/create'),
            'edit' => Pages\EditFRStrutLH::route('/{record}/edit'),
        ];
    }
}
