<?php

namespace App\Filament\Resources\RoofRailAssyResource\Pages;

use App\Filament\Resources\RoofRailAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoofRailAssy extends EditRecord
{
    protected static string $resource = RoofRailAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
