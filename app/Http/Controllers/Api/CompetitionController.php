<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Http\Resources\CompetitionResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CompetitionController extends Controller {
  public function index(): JsonResource {
    $competitions = Competition::orderBy('created_at')->get();

    CompetitionResource::wrap('competitions');

    return CompetitionResource::collection($competitions);
  }

  public function show($id): JsonResource {
    $competition = Competition::findOrFail($id);

    CompetitionResource::wrap('competition');

    return new CompetitionResource($competition);
  }
}