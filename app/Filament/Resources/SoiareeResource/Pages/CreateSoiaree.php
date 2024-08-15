<?php

namespace App\Filament\Resources\SoiareeResource\Pages;

use App\Filament\Resources\SoiareeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSoiaree extends CreateRecord
{
    protected static string $resource = SoiareeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
