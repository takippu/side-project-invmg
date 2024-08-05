<?php

namespace App\Filament\Resources\RRCrossmemberResource\Pages;

use App\Filament\Resources\RRCrossmemberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRRCrossmember extends EditRecord
{
    protected static string $resource = RRCrossmemberResource::class;
    
    public function getTitle(): string
    {
        return $this->record->subcategory;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('cancel')
                ->label('Back')
                ->color('secondary')
                ->icon('heroicon-m-arrow-uturn-left')
                ->url(static::getResource()::getUrl('index')),
            // Actions\DeleteAction::make(),
        ];
    }

    protected function getFormActions(): array
    {
        return [
            // Return an empty array to remove form actions
        ];
    }
}
