<?php

declare(strict_types=1);

namespace AdminKit\SocialProjects\UI\API\Controllers;

use AdminKit\SocialProjects\Models\SocialProject;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use AdminKit\SocialProjects\UI\API\Resources\SocialProjectResource;

class SocialProjectController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $socialProjects = SocialProject::query()
            ->orderBy('sort')
            ->get();

        return SocialProjectResource::collection($socialProjects);
    }
}
