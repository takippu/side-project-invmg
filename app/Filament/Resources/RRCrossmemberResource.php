<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RRCrossmemberResource\Pages;
use App\Filament\Resources\RRCrossmemberResource\RelationManagers;
use App\Filament\Resources\RRCrossmemberResource\RelationManagers\InventoryItemsRelationManager;
use App\Models\rr_crossmember;
use App\Models\RRCrossmember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RRCrossmemberResource extends Resource
{
    protected static ?string $model = rr_crossmember::class;

    protected static ?string $navigationGroup = 'FG Module';
    protected static ?string $navigationLabel = 'RR Crossmember';
    protected static ?string $modelLabel = 'RR Crossmember';
    protected static ?int $navigationSort = 1;
    
    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('subcategory')
                //     ->label('RN 25MY PART NAME')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\Hidden::make('id')
                //     ->label('subcategory_id'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subcategory')
                    ->label('RN 25MY PART NAME')
                    ->searchable(),
            ])
            ->filters([
                
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            InventoryItemsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRRCrossmembers::route('/'),
            'create' => Pages\CreateRRCrossmember::route('/create'),
            'edit' => Pages\EditRRCrossmember::route('/{record}/edit'),
        ];
    }
}