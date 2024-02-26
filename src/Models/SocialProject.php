<?php

namespace AdminKit\SocialProjects\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\SocialProjects\Database\Factories\SocialProjectFactory;

class SocialProject extends AbstractModel implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'admin_kit_social_projects';

    protected $fillable = [
        'title',
        'subtitle',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
        'subtitle',
    ];

    protected static function newFactory(): SocialProjectFactory
    {
        return new SocialProjectFactory();
    }
}
