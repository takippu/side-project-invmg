<?php

namespace App\Filament\Resources\FRStrutRHResource\Pages;

use App\Filament\Resources\FRStrutRHResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFRStrutRH extends EditRecord
{
    protected static string $resource = FRStrutRHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
