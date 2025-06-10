<?php

namespace App\Filament\Resources\AsesorResource\Pages;

use App\Filament\Resources\AsesorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAsesor extends EditRecord
{
    protected static string $resource = AsesorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
