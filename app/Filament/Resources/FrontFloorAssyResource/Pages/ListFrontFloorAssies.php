<?php

namespace App\Filament\Resources\FrontFloorAssyResource\Pages;

use App\Filament\Resources\FrontFloorAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFrontFloorAssies extends ListRecords
{
    protected static string $resource = FrontFloorAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
