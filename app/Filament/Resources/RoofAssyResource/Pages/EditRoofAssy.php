<?php

namespace App\Filament\Resources\RoofAssyResource\Pages;

use App\Filament\Resources\RoofAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoofAssy extends EditRecord
{
    protected static string $resource = RoofAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
