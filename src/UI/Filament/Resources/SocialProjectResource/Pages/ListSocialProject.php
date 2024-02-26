<?php

namespace AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource\Pages;

use AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

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
