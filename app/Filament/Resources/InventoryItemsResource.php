<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InventoryItemsResource\Pages;
use App\Filament\Resources\InventoryItemsResource\RelationManagers;
use App\Models\fr_strut_rh;
use App\Models\InventoryItems;
use App\Models\rr_crossmember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InventoryItemsResource extends Resource
{
    protected static ?string $model = InventoryItems::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('lot_number'),
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('quantity'),
                Forms\Components\Select::make('maincategory_id') 
                ->options([
                    '1' => 'RR Crossmember',
                    '2' => 'FR Strut RH',
                    '3' => 'FR Strut LH',
                    '4' => 'FR Drivetrain Assy',
                    '5' => 'Roof Assy',
                    '6' => 'Roof Rail Assy',
                    '7' => 'Rear Floor Assy',
                    '8' => 'Front Floor Assy',
                    '9' => 'Engine Room Assy',
                    '10' => 'Side Body RH',
                    '11' => 'Side Body LH',
                    '12' => 'I/PNL Assy',
                    '13' => 'FR Door Assy LH',
                    '14' => 'FR Door Assy RH',
                    '15' => 'Rear Door Assy LH',
                    '16' => 'Rear Door Assy RH',
                    '17' => 'Hydraulic Unit Assy',
                    '18' => 'Radiator Assy',
                ])->label('FG Module')->searchable()->reactive(),

                Forms\Components\Select::make('subcategory_id')
                ->label('RN 25MY PART NAME')
                ->options(function (callable $get) {
                    $subcategoryId = $get('maincategory_id'); // Get the selected subcategory_id

                    if($subcategoryId == '1'){
                        return rr_crossmember::all()->pluck('subcategory','id');
                    }
                    if($subcategoryId == '2'){
                        return fr_strut_rh::all()->pluck('subcategory','id');
                    }


                    // return InventoryItems::all()->pluck('name', 'id');
                })
                ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lot_number')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('maincategory_id')
                ->label('FG Module')
                ->sortable()
                ->searchable()
                ->formatStateUsing(function ($state) {
                    if($state == '1'){
                        return 'RR Crossmember';
                    }
                    if($state == '2'){
                        return 'FR Strut RH';
                    }
                }),
                Tables\Columns\TextColumn::make('rrcrossmember.subcategory')
                ->label('RN 25MY PART NAME')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('quantity')->sortable()->searchable(),

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
            'index' => Pages\ListInventoryItems::route('/'),
            // 'create' => Pages\CreateInventoryItems::route('/create'),
            // 'edit' => Pages\EditInventoryItems::route('/{record}/edit'),
        ];
    }
}
