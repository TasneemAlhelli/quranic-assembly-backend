<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CenterController;
use App\Http\Controllers\Api\AchievementController;
use App\Http\Controllers\Api\SoiareeController;
use App\Http\Controllers\Api\CompetitionController;

Route::resource('/centers', CenterController::class);

Route::resource('/achievements', AchievementController::class);

Route::resource('/soiaress', SoiareeController::class);

Route::resource('/competitions', CompetitionController::class);