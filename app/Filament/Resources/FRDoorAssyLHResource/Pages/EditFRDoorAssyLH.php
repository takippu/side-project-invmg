<?php

namespace App\Filament\Resources\FRDoorAssyLHResource\Pages;

use App\Filament\Resources\FRDoorAssyLHResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFRDoorAssyLH extends EditRecord
{
    protected static string $resource = FRDoorAssyLHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
