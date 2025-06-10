<?php

namespace App\Filament\Resources\AsesiResource\Pages;

use App\Filament\Resources\AsesiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAsesis extends ListRecords
{
    protected static string $resource = AsesiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
