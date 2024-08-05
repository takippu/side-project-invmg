<?php

namespace App\Filament\Resources\FrontFloorAssyResource\Pages;

use App\Filament\Resources\FrontFloorAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFrontFloorAssy extends EditRecord
{
    protected static string $resource = FrontFloorAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
