<?php

namespace App\Filament\Resources\FRDrivetrainAssyResource\Pages;

use App\Filament\Resources\FRDrivetrainAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFRDrivetrainAssies extends ListRecords
{
    protected static string $resource = FRDrivetrainAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
