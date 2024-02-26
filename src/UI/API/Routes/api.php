<?php

use AdminKit\SocialProjects\UI\API\Controllers\SocialProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/social-projects', [SocialProjectController::class, 'index']);
Route::get('/social-projects/{id}', [SocialProjectController::class, 'show']);
