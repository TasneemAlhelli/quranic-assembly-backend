<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CenterController;
use App\Http\Controllers\Api\AchievementController;
use App\Http\Controllers\Api\SoiareeController;

Route::resource('/centers', CenterController::class);

Route::resource('/achievements', AchievementController::class);

Route::resource('/soiaress', SoiareeController::class);