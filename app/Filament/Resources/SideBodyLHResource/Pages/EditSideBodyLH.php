<?php

namespace App\Filament\Resources\SideBodyLHResource\Pages;

use App\Filament\Resources\SideBodyLHResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSideBodyLH extends EditRecord
{
    protected static string $resource = SideBodyLHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
