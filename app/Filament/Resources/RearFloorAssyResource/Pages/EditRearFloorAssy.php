<?php

namespace App\Filament\Resources\RearFloorAssyResource\Pages;

use App\Filament\Resources\RearFloorAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRearFloorAssy extends EditRecord
{
    protected static string $resource = RearFloorAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
