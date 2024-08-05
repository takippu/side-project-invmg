<?php

namespace App\Filament\Resources\EngineRoomAssyResource\Pages;

use App\Filament\Resources\EngineRoomAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEngineRoomAssies extends ListRecords
{
    protected static string $resource = EngineRoomAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
