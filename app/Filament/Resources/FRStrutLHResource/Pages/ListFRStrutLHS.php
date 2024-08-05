<?php

namespace App\Filament\Resources\FRStrutLHResource\Pages;

use App\Filament\Resources\FRStrutLHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFRStrutLHS extends ListRecords
{
    protected static string $resource = FRStrutLHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
