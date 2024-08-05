<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IPNLAssyResource\Pages;
use App\Filament\Resources\IPNLAssyResource\RelationManagers;
use App\Models\ipnl_assy;
use App\Models\IPNLAssy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IPNLAssyResource extends Resource
{
    protected static ?string $model = ipnl_assy::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'I/PNL Assy';
    protected static ?string $modelLabel = 'I/PNL Assy';
    protected static ?int $navigationSort = 12;

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
            'index' => Pages\ListIPNLAssies::route('/'),
            'create' => Pages\CreateIPNLAssy::route('/create'),
            'edit' => Pages\EditIPNLAssy::route('/{record}/edit'),
        ];
    }
}
