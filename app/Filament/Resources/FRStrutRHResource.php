<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FRStrutRHResource\Pages;
use App\Filament\Resources\FRStrutRHResource\RelationManagers;
use App\Models\fr_strut_lh;
use App\Models\fr_strut_rh;
use App\Models\FRStrutRH;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FRStrutRHResource extends Resource
{
    protected static ?string $model = fr_strut_rh::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'FR Strut RH';
    protected static ?string $modelLabel = 'FR Strut RH';
    protected static ?int $navigationSort = 2;

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
            'index' => Pages\ListFRStrutRHS::route('/'),
            'create' => Pages\CreateFRStrutRH::route('/create'),
            'edit' => Pages\EditFRStrutRH::route('/{record}/edit'),
        ];
    }
}
