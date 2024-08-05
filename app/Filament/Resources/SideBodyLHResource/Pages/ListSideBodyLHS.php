<?php

namespace App\Filament\Resources\SideBodyLHResource\Pages;

use App\Filament\Resources\SideBodyLHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSideBodyLHS extends ListRecords
{
    protected static string $resource = SideBodyLHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
