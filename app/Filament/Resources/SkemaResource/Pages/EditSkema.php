<?php

namespace App\Filament\Resources\SkemaResource\Pages;

use App\Filament\Resources\SkemaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkema extends EditRecord
{
    protected static string $resource = SkemaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
