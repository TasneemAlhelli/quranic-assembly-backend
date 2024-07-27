<?php

namespace App\Filament\Resources\SoiareeResource\Pages;

use App\Filament\Resources\SoiareeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoiarees extends ListRecords
{
    protected static string $resource = SoiareeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
