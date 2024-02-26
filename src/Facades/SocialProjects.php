<?php

namespace AdminKit\SocialProjects\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\SocialProjects\SocialProjects
 */
class SocialProjects extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\SocialProjects\SocialProjects::class;
    }
}
