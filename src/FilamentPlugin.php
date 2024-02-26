<?php

namespace AdminKit\SocialProjects;

use AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-social-projects';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            SocialProjectResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
