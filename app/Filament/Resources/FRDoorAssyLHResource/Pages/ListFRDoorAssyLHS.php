<?php

namespace App\Filament\Resources\FRDoorAssyLHResource\Pages;

use App\Filament\Resources\FRDoorAssyLHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFRDoorAssyLHS extends ListRecords
{
    protected static string $resource = FRDoorAssyLHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
