<?php

namespace AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource;

class ListSocialProject extends ListRecords
{
    protected static string $resource = SocialProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
