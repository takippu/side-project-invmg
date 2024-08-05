<?php

namespace App\Filament\Resources\IPNLAssyResource\Pages;

use App\Filament\Resources\IPNLAssyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIPNLAssy extends EditRecord
{
    protected static string $resource = IPNLAssyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
