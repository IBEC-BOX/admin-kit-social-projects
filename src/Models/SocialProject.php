<?php

namespace AdminKit\SocialProjects\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\SocialProjects\Database\Factories\SocialProjectFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class SocialProject extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_social_projects';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): SocialProjectFactory
    {
        return new SocialProjectFactory();
    }
}
