<?php

namespace App\Filament\Resources\RoofRailAssyResource\Pages;

use App\Filament\Resources\RoofRailAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoofRailAssies extends ListRecords
{
    protected static string $resource = RoofRailAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
