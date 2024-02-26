<?php

use Illuminate\Support\Facades\Route;
use AdminKit\SocialProjects\UI\API\Controllers\SocialProjectController;

Route::get('/social-projects', [SocialProjectController::class, 'index']);
