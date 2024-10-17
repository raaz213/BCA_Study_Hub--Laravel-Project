<?php

namespace App\Filament\Resources\YearsResource\Pages;

use App\Filament\Resources\YearsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewYears extends ViewRecord
{
    protected static string $resource = YearsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
