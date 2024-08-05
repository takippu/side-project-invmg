<?php

namespace App\Filament\Resources\RoofAssyResource\Pages;

use App\Filament\Resources\RoofAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoofAssies extends ListRecords
{
    protected static string $resource = RoofAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
