<?php

namespace App\Filament\Resources\RadiatorAssyResource\Pages;

use App\Filament\Resources\RadiatorAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRadiatorAssy extends EditRecord
{
    protected static string $resource = RadiatorAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
