<?php

namespace App\Filament\Resources\PoetryResource\Pages;

use App\Filament\Resources\PoetryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPoetry extends EditRecord
{
    protected static string $resource = PoetryResource::class;

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
