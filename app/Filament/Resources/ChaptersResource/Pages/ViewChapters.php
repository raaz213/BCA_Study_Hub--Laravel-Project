<?php

namespace App\Filament\Resources\ChaptersResource\Pages;

use App\Filament\Resources\ChaptersResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewChapters extends ViewRecord
{
    protected static string $resource = ChaptersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
