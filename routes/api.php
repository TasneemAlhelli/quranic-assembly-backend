<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CenterController;
use App\Http\Controllers\Api\AchievementController;

Route::resource('/centers', CenterController::class);

Route::resource('/achievements', AchievementController::class);