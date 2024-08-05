<?php

namespace App\Filament\Resources\FRDoorAssyRHResource\Pages;

use App\Filament\Resources\FRDoorAssyRHResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFRDoorAssyRH extends EditRecord
{
    protected static string $resource = FRDoorAssyRHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
