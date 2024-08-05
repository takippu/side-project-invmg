<?php

namespace App\Filament\Resources\InventoryItemsResource\Pages;

use App\Filament\Resources\InventoryItemsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventoryItems extends EditRecord
{
    protected static string $resource = InventoryItemsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
