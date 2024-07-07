<?php

namespace App\Filament\Resources\BeYourOwnLevelResource\Pages;

use App\Filament\Resources\BeYourOwnLevelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeYourOwnLevels extends ListRecords
{
    protected static string $resource = BeYourOwnLevelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
