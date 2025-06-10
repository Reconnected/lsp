<?php

namespace App\Filament\Resources\AsesorResource\Pages;

use App\Filament\Resources\AsesorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAsesors extends ListRecords
{
    protected static string $resource = AsesorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
