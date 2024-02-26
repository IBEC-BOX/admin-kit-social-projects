<?php

declare(strict_types=1);

namespace AdminKit\SocialProjects\UI\API\Controllers;

use AdminKit\SocialProjects\Models\SocialProject;

class SocialProjectController extends Controller
{
    public function index()
    {
        return SocialProject::all();
    }

    public function show(int $id)
    {
        return SocialProject::findOrFail($id);
    }
}
