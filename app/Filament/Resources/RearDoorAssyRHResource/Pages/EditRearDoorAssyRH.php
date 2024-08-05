<?php

namespace App\Filament\Resources\RearDoorAssyRHResource\Pages;

use App\Filament\Resources\RearDoorAssyRHResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRearDoorAssyRH extends EditRecord
{
    protected static string $resource = RearDoorAssyRHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
