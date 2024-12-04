<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Center;
use App\Models\Award;
use App\Models\Achievement;
use App\Models\Course;
use App\Models\Soiree;
use App\Models\Competition;
use App\Models\Poetry;
use App\Models\Character;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeController extends Controller {

  public function index() {
    $total_achievements = Achievement::count();
    $total_awards = Award::count();
    $total_centers = Center::count();
    $total_courses = Course::count();
    $total_soirees = Soiree::count();
    $total_competitions = Competition::count();
    $total_poetries = Poetry::count();
    $total_characters = Character::count();


    return response()->json([
      'statistics' => [
          'achievements' => $total_achievements,
          'awards' => $total_awards,
          'centers' => $total_centers,
          'courses' => $total_courses,
          'soirees' => $total_soirees,
          'competitions' => $total_competitions,
          'poetries' => $total_poetries,
          'characters' => $total_characters,
      ]
  ]);

  }
}