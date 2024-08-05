<?php

namespace App\Filament\Resources\RadiatorAssyResource\Pages;

use App\Filament\Resources\RadiatorAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRadiatorAssies extends ListRecords
{
    protected static string $resource = RadiatorAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
