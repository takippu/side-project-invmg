<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FRDrivetrainAssyResource\Pages;
use App\Filament\Resources\FRDrivetrainAssyResource\RelationManagers;
use App\Models\fr_drivetrain_assy;
use App\Models\FRDrivetrainAssy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FRDrivetrainAssyResource extends Resource
{
    protected static ?string $model = fr_drivetrain_assy::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'FR Drivetrain Assy';
    protected static ?string $modelLabel = 'FR Drivetrain Assy';
    protected static ?int $navigationSort = 4;

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
            'index' => Pages\ListFRDrivetrainAssies::route('/'),
            'create' => Pages\CreateFRDrivetrainAssy::route('/create'),
            'edit' => Pages\EditFRDrivetrainAssy::route('/{record}/edit'),
        ];
    }
}
