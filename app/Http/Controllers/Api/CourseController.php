<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CourseResource;

/**
 * Class CharacterController
 * @package App\API\Controllers
 */
class CourseController extends Controller {
  public function __construct () {}

  public function index(): JsonResource {
    $courses = Course::orderBy('created_at')->get();

    CourseResource::wrap('courses');
    
    return CourseResource::collection($courses); 
  }

  public function show($id): JsonResource {
    $course = Course::with(['subjects', 'attendees'])->findOrFail($id);

    CourseResource::wrap('course');

    return new CourseResource($course);
  }
}