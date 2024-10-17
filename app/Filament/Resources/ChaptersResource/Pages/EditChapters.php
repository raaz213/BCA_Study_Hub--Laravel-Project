<?php

namespace App\Filament\Resources\ChaptersResource\Pages;

use App\Filament\Resources\ChaptersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChapters extends EditRecord
{
    protected static string $resource = ChaptersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
