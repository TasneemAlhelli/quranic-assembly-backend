<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Http\Resources\AchievementResource;

class AchievementController extends Controller {
  public function index(): JsonResource {
    $achievements = Achievement::orderBy('created_at')->get();

    AchievementResource::wrap('achievements');

    return AchievementResource::collection($achievements);
  }
}