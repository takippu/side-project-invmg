<?php

namespace App\Filament\Resources\RearDoorAssyLHResource\Pages;

use App\Filament\Resources\RearDoorAssyLHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRearDoorAssyLHS extends ListRecords
{
    protected static string $resource = RearDoorAssyLHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
