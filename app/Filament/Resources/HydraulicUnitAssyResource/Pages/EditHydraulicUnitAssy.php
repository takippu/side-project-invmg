<?php

namespace App\Filament\Resources\HydraulicUnitAssyResource\Pages;

use App\Filament\Resources\HydraulicUnitAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHydraulicUnitAssy extends EditRecord
{
    protected static string $resource = HydraulicUnitAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
