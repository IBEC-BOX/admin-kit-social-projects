<?php

namespace AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource;

class EditSocialProject extends EditRecord
{
    protected static string $resource = SocialProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
