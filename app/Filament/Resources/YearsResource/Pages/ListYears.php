<?php

namespace App\Filament\Resources\YearsResource\Pages;

use App\Filament\Resources\YearsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYears extends ListRecords
{
    protected static string $resource = YearsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
