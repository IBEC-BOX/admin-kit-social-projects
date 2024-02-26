<?php

namespace AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource;

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
