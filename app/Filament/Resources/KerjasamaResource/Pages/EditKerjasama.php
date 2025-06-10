<?php

namespace App\Filament\Resources\KerjasamaResource\Pages;

use App\Filament\Resources\KerjasamaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKerjasama extends EditRecord
{
    protected static string $resource = KerjasamaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
