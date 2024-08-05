<?php

namespace App\Filament\Resources\SideBodyRHResource\Pages;

use App\Filament\Resources\SideBodyRHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSideBodyRHS extends ListRecords
{
    protected static string $resource = SideBodyRHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
