<?php

namespace App\Filament\Resources\SoireeResource\Pages;

use App\Filament\Resources\SoireeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSoiree extends CreateRecord
{
    protected static string $resource = SoireeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
