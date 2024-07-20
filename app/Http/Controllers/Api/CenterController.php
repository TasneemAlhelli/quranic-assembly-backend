<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CenterResource;

/**
 * Class CenterController
 * @package App\API\Controllers
 */
class CenterController extends Controller {
  public function __construct () {}

  public function index(): JsonResource {
    $centers = Center::orderBy('created_at')->get();

    CenterResource::wrap('centers');
    
    return CenterResource::collection($centers); 
  }

  public function show($id): JsonResource {
    $center = Center::with('contacts')->findOrFail($id);

    CenterResource::wrap('center');

    return new CenterResource($center);
  }
}