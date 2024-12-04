<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PoetryResource;
use App\Models\Poetry;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class PoetryController
 * @package App\Http\Controllers
 */
class PoetryController extends Controller {
  public function __construct () {}


  public function index(): JsonResource {
    $poetries = Poetry::orderBy('created_at')->get();

    PoetryResource::wrap('poetries');
    
    return PoetryResource::collection($poetries); 
  }

  public function show($id): JsonResource {
    $poetry = Poetry::with('attachments')->findOrFail($id);

    PoetryResource::wrap('poetry');

    return new PoetryResource($poetry);
  }
}