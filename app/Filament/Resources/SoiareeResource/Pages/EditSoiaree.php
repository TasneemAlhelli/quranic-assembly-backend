<?php

namespace App\Filament\Resources\SoiareeResource\Pages;

use App\Filament\Resources\SoiareeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoiaree extends EditRecord
{
    protected static string $resource = SoiareeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
