<?php

namespace App\Filament\Resources\FRStrutLHResource\Pages;

use App\Filament\Resources\FRStrutLHResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFRStrutLH extends EditRecord
{
    protected static string $resource = FRStrutLHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
