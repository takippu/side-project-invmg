<?php

namespace App\Filament\Resources\HydraulicUnitAssyResource\Pages;

use App\Filament\Resources\HydraulicUnitAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHydraulicUnitAssies extends ListRecords
{
    protected static string $resource = HydraulicUnitAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
