<?php

namespace App\Filament\Resources\FRDoorAssyRHResource\Pages;

use App\Filament\Resources\FRDoorAssyRHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFRDoorAssyRHS extends ListRecords
{
    protected static string $resource = FRDoorAssyRHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
