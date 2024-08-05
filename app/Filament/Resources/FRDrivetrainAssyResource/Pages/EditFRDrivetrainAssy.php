<?php

namespace App\Filament\Resources\FRDrivetrainAssyResource\Pages;

use App\Filament\Resources\FRDrivetrainAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFRDrivetrainAssy extends EditRecord
{
    protected static string $resource = FRDrivetrainAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
