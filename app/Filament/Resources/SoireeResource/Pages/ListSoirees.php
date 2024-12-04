<?php

namespace App\Filament\Resources\SoireeResource\Pages;

use App\Filament\Resources\SoireeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoirees extends ListRecords
{
    protected static string $resource = SoireeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
