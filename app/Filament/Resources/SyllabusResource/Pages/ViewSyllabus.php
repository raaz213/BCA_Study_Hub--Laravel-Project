<?php

namespace App\Filament\Resources\SyllabusResource\Pages;

use App\Filament\Resources\SyllabusResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSyllabus extends ViewRecord
{
    protected static string $resource = SyllabusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
