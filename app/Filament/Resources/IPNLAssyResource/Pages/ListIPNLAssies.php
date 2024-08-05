<?php

namespace App\Filament\Resources\IPNLAssyResource\Pages;

use App\Filament\Resources\IPNLAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIPNLAssies extends ListRecords
{
    protected static string $resource = IPNLAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
