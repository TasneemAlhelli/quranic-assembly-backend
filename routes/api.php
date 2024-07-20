<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CenterController;

// Route::get('/centers', [CenterController::class, 'index']);

Route::resource('/centers', CenterController::class);
// //