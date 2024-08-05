<?php

namespace App\Filament\Resources\InventoryItemsResource\Pages;

use App\Filament\Resources\InventoryItemsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventoryItems extends ListRecords
{
    protected static string $resource = InventoryItemsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
