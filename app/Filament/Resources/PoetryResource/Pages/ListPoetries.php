<?php

namespace App\Filament\Resources\PoetryResource\Pages;

use App\Filament\Resources\PoetryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPoetries extends ListRecords
{
    protected static string $resource = PoetryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
