<?php

namespace App\Filament\Resources\SoireeResource\Pages;

use App\Filament\Resources\SoireeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoiree extends EditRecord
{
    protected static string $resource = SoireeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
