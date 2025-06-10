<?php

namespace App\Filament\Resources\TukResource\Pages;

use App\Filament\Resources\TukResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTuks extends ListRecords
{
    protected static string $resource = TukResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
