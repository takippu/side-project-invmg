<?php

namespace App\Filament\Resources\EngineRoomAssyResource\Pages;

use App\Filament\Resources\EngineRoomAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEngineRoomAssy extends EditRecord
{
    protected static string $resource = EngineRoomAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
