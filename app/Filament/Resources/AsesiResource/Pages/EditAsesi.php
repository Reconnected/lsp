<?php

namespace App\Filament\Resources\AsesiResource\Pages;

use App\Filament\Resources\AsesiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAsesi extends EditRecord
{
    protected static string $resource = AsesiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
