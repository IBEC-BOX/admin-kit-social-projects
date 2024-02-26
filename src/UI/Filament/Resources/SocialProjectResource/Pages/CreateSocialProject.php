<?php

namespace AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource\Pages;

use AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSocialProject extends CreateRecord
{
    protected static string $resource = SocialProjectResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return SocialProjectResource::getUrl();
    }
}
