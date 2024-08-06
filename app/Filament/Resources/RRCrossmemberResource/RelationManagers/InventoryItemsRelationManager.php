<?php 

namespace App\Filament\Resources\RRCrossmemberResource\RelationManagers;

use App\Models\fr_strut_lh;
use App\Models\fr_strut_rh;
use App\Models\InventoryItems;
use App\Models\rr_crossmember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Filament\Notifications\Notification;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\DatePicker;
class InventoryItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'inventoryItems';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('lot_number')
                    ->required()
                    ->default(function () {
                        $lastLotNumber = InventoryItems::where('maincategory_id', 1)->max('lot_number');
                        $nextNumber = $lastLotNumber ? intval($lastLotNumber) + 1 : 1;
                        return str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
                    })
                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                        $lastLotNumber = InventoryItems::where('maincategory_id', 1)->max('lot_number');
                        $expectedNumber = $lastLotNumber ? intval($lastLotNumber) + 1 : 1;
                        $expectedLotNumber = str_pad($expectedNumber, 4, '0', STR_PAD_LEFT);
                        
                        if ($state !== $expectedLotNumber) {
                            Notification::make()
                                ->title('Invalid Lot Number')
                                ->body("The lot number should be {$expectedLotNumber}.")
                                ->danger()
                                ->send();
                            
                            $set('lot_number', $expectedLotNumber);
                        }
                    })
                    ->maxLength(4)
                    ->placeholder('0001')
                    ->helperText('Enter a 4-digit number starting from 0001'),
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('maincategory_id')
                    ->options(['1' => 'RR Crossmember'])
                    ->label('FG Module')
                    ->searchable()
                    ->disabled()
                    ->default(function () {
                        // Get main category ID from owner record
                        return $this->ownerRecord->maincategory_id ?? 1;
                    }),
                Forms\Components\Select::make('subcategory_id')
                    ->label('RN 25MY PART NAME')
                    ->options(function () {
                        return rr_crossmember::all()->pluck('subcategory', 'id');
                    })
                    ->searchable()
                    ->default(function () {
                        return $this->ownerRecord->id ?? null;
                    })
                    ->disabled()
                    ->reactive(),
                Forms\Components\Select::make('part_number')
                    ->label('Part Number')
                    ->options(function () {
                        return rr_crossmember::all()->pluck('part_number', 'part_number');
                    })
                    ->searchable()
                    ->default(function () {
                        return $this->ownerRecord->part_number ?? null;
                    })
                    ->disabled()
                    ->required(),
                    Forms\Components\Textarea::make('remarks')
                    ->label('Remarks')
                    ->extraAttributes(['class' => 'w-full'])
                    ->rows(5) // Adjust the number of rows to make it bigger
                    ->columnSpan('full'),
                    
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                return $query->where('maincategory_id', 1)
                             ->where('subcategory_id', $this->ownerRecord->id);
            })
            ->columns([
                Tables\Columns\TextColumn::make('maincategory_id')
                    ->label('FG Module')
                    ->formatStateUsing(fn ($state) => 'RR Crossmember'),
                Tables\Columns\TextColumn::make('subcategory_id')
                    ->label('RN 25MY PART NAME')
                    ->formatStateUsing(function ($state, $record) {
                        return rr_crossmember::find($record->subcategory_id)->subcategory ?? 'Not Found';
                    }),
                Tables\Columns\TextColumn::make('part_number')
                    ->label('Part Number')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('lot_number')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('quantity')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('remarks')
                    ->label('Remarks'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Timestamp')
                    ->formatStateUsing(fn ($state) => \Carbon\Carbon::parse($state)->format('d M Y H:i'))
                    ->sortable(), // Make the column sortable if needed
                
            ])
            ->filters([
                Filter::make('date_range')
                    ->label('Date Range')
                    ->form([
                        DatePicker::make('start_date')
                            ->label('Start Date'),
                            // ->default(now()->startOfMonth()), // Optional: Set a default value
                        DatePicker::make('end_date')
                            ->label('End Date'),
                            // ->default(now()), // Optional: Set a default value
                    ])
                    ->query(function ($query, $data) {
                        $startDate = $data['start_date'] ?? null;
                        $endDate = $data['end_date'] ?? null;
                        
                        // Only apply the filter if both dates are provided
                        if ($startDate && $endDate) {
                            return $query->whereBetween('created_at', [$startDate, $endDate]);
                        }
                        
                        return $query; // Return the query unmodified if dates are not provided
                    }),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make()
                //     ->after(function ($data, $record) {
                //         $this->reorderLotNumbers();
                //     }),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make()
                //         ->after(function () {
                //             $this->reorderLotNumbers();
                //         }),
                // ]),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        $data['maincategory_id'] = 1;
                        $data['subcategory_id'] = $this->ownerRecord->id;
                        $data['part_number'] = $data['part_number'] ?? $this->ownerRecord->part_number ?? null;

                        return $data;
                    }),
            ]);
    }

    protected function reorderLotNumbers(): void
    {
        $items = InventoryItems::where('maincategory_id', 1)
            ->where('subcategory_id', $this->ownerRecord->id)
            ->orderBy('lot_number')
            ->get();

        foreach ($items as $index => $item) {
            $newLotNumber = str_pad($index + 1, 4, '0', STR_PAD_LEFT);
            if ($item->lot_number !== $newLotNumber) {
                $item->update(['lot_number' => $newLotNumber]);
            }
        }
    }
}