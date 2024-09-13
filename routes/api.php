<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CenterController;
use App\Http\Controllers\Api\AchievementController;
use App\Http\Controllers\Api\SoireeController;
use App\Http\Controllers\Api\CompetitionController;
use App\Http\Controllers\Api\PoetryController;
use App\Http\Controllers\Api\CharacterController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\AwardController;
use App\Http\Controllers\Api\HomeController;

Route::resource('/centers', CenterController::class);
Route::resource('/achievements', AchievementController::class);
Route::resource('/soirees', SoireeController::class);
Route::resource('/competitions', CompetitionController::class);
Route::resource('/poetries', PoetryController::class);
Route::resource('/characters', CharacterController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/awards', AwardController::class);
Route::get('/statistics', [HomeController::class, 'index']);