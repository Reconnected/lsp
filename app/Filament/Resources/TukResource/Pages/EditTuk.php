<?php

namespace App\Filament\Resources\TukResource\Pages;

use App\Filament\Resources\TukResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTuk extends EditRecord
{
    protected static string $resource = TukResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
