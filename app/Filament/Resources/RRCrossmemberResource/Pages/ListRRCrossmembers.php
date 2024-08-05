<?php

namespace App\Filament\Resources\RRCrossmemberResource\Pages;

use App\Filament\Resources\RRCrossmemberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRRCrossmembers extends ListRecords
{
    protected static string $resource = RRCrossmemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
