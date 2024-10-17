<?php

namespace App\Filament\Resources\ChaptersResource\Pages;

use App\Filament\Resources\ChaptersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChapters extends ListRecords
{
    protected static string $resource = ChaptersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
